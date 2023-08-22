<div style="background:#aaa;color:white;overflow:auto;height:370px;">
    <input type="button" value="新增電影" onclick="location.href='?do=add_movie'">
    <hr>

    <form action="./api/edit_movie.php" method="post">
        <?php
        foreach ($rows as $idx => $row) {
         
        ?>

            <div style="display:flex;background:white; margin: 3px 3px;">
                <div style="width:15%;margin:3px;color:black;"><img src="./upload/<?= $row['poster']; ?>" width="80px" height="80px"></div>
                <div style="width:12%;margin:3px;color:black;">分級:<img src="./icon/03C0<?= $row['level']; ?>.png" width="50px" height="50px"></div>
                <div style="width:75%;margin:3px;color:black;">
                    <table style="width:100%">
                        <tr>
                            <td style="width:33%">片名:<?= $row['name']; ?></td>
                            <td style="width:33%">片長:<?= $row['length']; ?></td>
                            <td style="width:33%">上映時間:<?= $row['ondate']; ?></td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align:right">
                                <div>
                                    <input type="button" value="<?= ($row['sh'] == 1) ? '顯示' : '隱藏'; ?>" class="show" data-id="<?=$row['id'];?>">
                                    <input type="button" value="編輯電影" onclick="location.href='?do=edit_movie&id=<?= $row['id']; ?>'">
                                    <input type="button" value="刪除電影" onclick="del(<?= $row['id']; ?>)">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <?= $row['intro']; ?>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
        <?php
        }
        ?>
    </form>
</div>

<script>
    $(".show").click(function() {
        // console.log($(this).data('id'));
        $.post("./api/show.php",{id:$(this).data('id')},()=>{
            val = $(this).val()
        switch (val) {
            case "顯示":
                $(this).val("隱藏");
                break;
            case "隱藏":
                $(this).val("顯示");
                break;
        }
        }) 
    })

    function del(id) {
        $.post("./api/del.php", {id,'table':'Movie'}, () => {
            location.reload();
        })
    }
</script>