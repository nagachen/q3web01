<div class="ct" style="background:#aaa;color:white;overflow:auto;height:370px;">
    <h3>預告片清單</h3>
    <div class="all" style="display: flex;">
        <div style="width:22%;border: 1px solid;margin:3px;color:white;background:#666">預告片海報</div>
        <div style="width:22%;border: 1px solid;margin:3px;color:white;background:#666">預告片片名</div>
        <div style="width:22%;border: 1px solid;margin:3px;color:white;background:#666">預告片排序</div>
        <div style="width:30%;border: 1px solid;margin:3px;color:white;background:#666">操作</div>
    </div>
    <form action="./api/edit_posters.php" method="post">
        <?php
        foreach ($rows as $idx => $row) {
            $prev = ($idx == 0) ? $row['id'] : $rows[$idx - 1]['id'];
            $next = ($idx == array_key_last($rows)) ? $row['id'] : $rows[$idx + 1]['id'];
        ?>
            <div style="display:flex;background:white; margin: 3px 3px;">
                <div style="width:22%;margin:3px;color:black;"><img src="./upload/<?= $row['img']; ?>" width="50px" height="80px"></div>
                <div style="width:22%;margin:3px;color:black;"><input type="text" name="name[]" value="<?= $row['name']; ?>"></div>
                <div style="width:22%;margin:3px;color:black;">
                    <button class="sw" data-sw="<?= $row['id']; ?>-<?= $prev; ?>">往上</button>
                    <button class="sw" data-sw="<?= $row['id']; ?>-<?= $next; ?>">往下</button>


                </div>
                <div style="width:30%;margin:3px;color:black;">
                    <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? "checked" : ""; ?>>顯示
                    <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">刪除
                    <select name="ani[]" id="">
                        <option value="1" <?= ($row['ani'] == 1) ? "selected" : ""; ?>>淡入淡出</option>
                        <option value="2" <?= ($row['ani'] == 2) ? "selected" : ""; ?>>縮放</option>
                        <option value="3" <?= ($row['ani'] == 3) ? "selected" : ""; ?>>滑入滑出</option>

                    </select>
                    <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                </div>

            </div>


        <?php
        }
        ?>

        <div class="ct">
            <input type="submit" value="編輯"><input type="reset" value="重置">
        </div>
</div>
</form>

<script>
    $(".sw").on("click", function() {
        let id = $(this).data('sw').split("-")
        $.post("./api/sw.php", {
            table: 'poster',
            id
        }, () => {
            locaton.reload();
        })
    })
</script>

<hr>

<div style="background:white;">
    <div style="background:#aaa" class="ct">
        <h3 style="color:white">新增預告片海報</h3>
    </div>
    <form action="./api/add_poster.php" method="post" enctype="multipart/form-data">

    <div style="background:#aaa;display:flex;justify-content: space-between;">
        <div>
            <label for="">預告片海報</label>
        </div>
        <div style="display:flex;flex-direction: column">
            <input type="file" name="img">
            <span style="color:red;">檔案請使英文檔名</span>
        </div>
        <div>
            <label for="">預告片片名</label>
            <input type="text" name="name">
        </div>
    </div>
    <div class="ct">
        <input type="submit" value="新增" style="background:black;color:white;">
        <input type="reset" value="重置" style="background:black;color:white;">
    </div>
    </form>
</div>