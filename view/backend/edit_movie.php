<?php
$row=$Movie->find($_GET['id']);
$tmp=explode('-',$row['ondate']);
$row['year']=$tmp[0];
$row['month']=$tmp[1];
$row['day']=$tmp[2];

?>
<div class="all">
    <form action="./api/edit_movie.php" method="post" enctype="multipart/form-data">
        <div class="row" style="display:flex">
            <div class="col">影片資料</div>
            <div class="col">
                <table style="background:#aaa;">
  
                    <tr>
                        <td>片名:</td>
                        <td><input type="text" name="name" value="<?=$row['name'];?>"></td>
                    </tr>
                    
                    <tr>
                        <td>分級：</td>
                        <td><select name="level" id="">
                               
                                <option value="1" <?=($row['level']==1)?'selected':'';?>>普通級</option>
                                <option value="2" <?=($row['level']==2)?'selected':'';?>>保護級</option>
                                <option value="3" <?=($row['level']==3)?'selected':'';?>>輔導級</option>
                                <option value="4" <?=($row['level']==4)?'selected':'';?>>限制級</option>
                            </select>(普通級、保護級、輔導級、限制級)</td>
                    </tr>
                    
                    <tr>
                        <td>片長:</td>
                        <td><input type="text" name="length" value="<?=$row['length'];?>"></td>
                    </tr>
                    
                    <tr>
                        <td>上映日期：</td>
                        <td>
                            <select name="year" id="">
                                <option value="2023"<?=($row['year']==2023)?'selected':'';?>>2023</option>
                                <option value="2024" <?=($row['year']==2024)?'selected':'';?>>2024</option>
                                <option value="2025" <?=($row['year']==2025)?'selected':'';?>>2025</option>
                            </select>年
                            <select name="month" id="">
                                <?php
                                for ($i = 1; $i <= 12; $i++) {
                                ?>
                                    <option value="<?= $i;?>" <?=($row['month']==$i)?'selected':'';?>><?= $i; ?></option>
                                <?php
                                }
                                ?>
                            </select>月
                            <select name="day" id="">
                                <?php
                                for ($i = 1; $i < 31; $i++) {
                                    echo "<option value='$i'";
                                    echo  $row['day']==$i?'selected':'';
                                    echo ">$i</option>";
                                }
                                ?>
                            </select>日
                        </td>
                    </tr>
                    
                    <tr>
                        <td>發行商:</td>
                        <td><input type="text" name="publish" value="<?=$row['publish'];?>"></td>
                    </tr>
                    
                    <tr>
                        <td>導演:</td>
                        <td><input type="text" name="director" value="<?=$row['director'];?>"></td>
                    </tr>
                    
                    <tr>
                        <td>預告影片:</td>
                        <td><input type="file" name="trailer" value="<?=$row['trailer'];?>"></td>
                    </tr>
                    <tr>
                        <td>電影海報:</td>
                        <td><input type="file" name="poster" value="<?=$row['poster'];?>"></td>
                    </tr>


                </table>

            </div>
        </div>

        <div class="row" style="display:flex">
            <div class="col">
                劇情簡介
            </div>
            <div class="col">
                <textarea name="intro" value="<?=$row['intro'];?>" id="" cols="30" rows="10" style="border: 1px solid;"></textarea>
            </div>
        </div>
        <div class="ct">
            <input type="hidden" name="id" value="<?=$row['id'];?>">
            <input type="submit" value="修改">
            <input type="reset" value="重置">

        </div>
    </form>
</div>