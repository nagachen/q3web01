<style>
    .header {
        display: flex;
        background: #ccc;

    }

    .header>div {
        width: calc(100%/7);
    }

    .ct>h3 {
        width: 100%;
        background: #aaa;
        color: white;
        margin: 0;
    }
    .order{
        display:flex;
        
    }
    .order > div{
        width: calc(100%/7);
    }
</style>

<div class="ct">
    <h3>訂單清單</h3>
</div>
<div style="background:#aaa">
    快速刪除:

    <input type="radio" name="type" value="date" checked>依日期
    <input type="text" name="date" id="">
    <input type="radio" name="type" value="movie">依電影
    <select name="movie" id="">
        <?php
        foreach($rows as $row){
            echo "<option value='{$row['movie']}'>{$row['movie']}</option>";
        }
        ?>
    </select>
    <button type="button" onclick="qdel()">刪除</button>

</div>
<div class="header">
    <div>訂單編號</div>
    <div>電影名稱</div>
    <div>日期</div>
    <div>場次時間</div>
    <div>訂單數量</div>
    <div>訂購位置</div>
    <div>操作</div>

</div>
<div class="order-list">
    <?php
    
    foreach ($rows as $row) {
       
    ?>
        <div class="order" >
            <div><?=$row['no'];?></div>
            <div><?=$row['movie'];?></div>
            <div><?=$row['date'];?></div>
            <div><?=$row['session'];?></div>
            <div><?=$row['qt'];?></div>
            <div>
                <?php
                    $seats=unserialize($row['seats']);
                    foreach($seats as $seat){
                        echo (floor($seat/5)+1) ."排".(floor($seat%5)+1)."號";
                        echo "<br>";
                    }
                ?>
            </div>
            <div><button class="del" data-id="<?=$row['id'];?>">刪除</button></div>
        </div>

        <hr>
    <?php
    }
    ?>
</div>

<script>
    $(".del").click(function(){
        id=$(this).data('id');
        $.post('./api/del',{'table':'Order','id':id},()=>{
            location.reload();
        })
    })

    function qdel(){
        let type=$("input[type='radio']:checked").val();
        let target;
        switch(type){
            case 'movie':
                target=$("select[name='movie']").val()
            break;
            case 'date':
                target=$("input[name='date']").val()
            break;
        }
        let chk=confirm(`你確定要刪除${target}的資料嗎？`)
        if(chk){
            $.post("./api/qdel.php",{type,target},()=>{
                 location.reload();
            })
        }

    }
</script>