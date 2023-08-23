<style>
  #content {
    display: flex;
    flex-direction: column;
    width: 100px;
  }

  .all {
    flex-wrap: wrap;
    font-size: 12px;
  }

  .col {
    width: 48%;
    flex-wrap: wrap;
    margin: 1% 3px;
  }

  .all * {
    box-sizing: border-box;
  }
</style>


<div class="half" style="vertical-align:top;">
  <h1>預告片介紹</h1>
  <div class="rb tab" style="width:95%;">
    <div id="abgne-block-20111227">
      <ul class="lists">
      </ul>
      <ul class="controls">
      </ul>
    </div>
  </div>
</div>
<div class="half">
  <h1>院線片清單</h1>
  <div class="all" style="display:flex">
    <?php
    $rows = $Movie->movies();
    foreach ($rows as $row) {
    ?>
      <div class="col" style="display:flex" ;>
        <div>
          <img src="./upload/<?= $row['poster']; ?> " width="100px">
        </div>
        <div id="content">
          <div><?= $row['name']; ?></div>
          <div>分級:<img src="./icon/03C0<?= $row['level']; ?>.png">
          <?=$Movie->level($row['level']);?>
          </div>
          <div>上映日期:<?= $row['ondate']; ?></div>
        </div>
        <div>
          <button onclick="location.href='?do=intro&id=<?= $row['id']; ?>'">劇情簡介</button>
          <button onclick="location.href='?do=order&id=<?= $row['id']; ?>'">線上訂票</button>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</div>
</div>