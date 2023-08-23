<style>
  .posters *,
  .control * {
    box-sizing: border-box;
  }

  .posters {
    width: 210px;
    height: 260px;
    overflow: hidden;
    position: relative;
    margin: 2px auto;
  }

  .poster {
    width: 100%;
    height: 100%;

    border: 1px solid white;
    text-align: center;
    font-size: 16px;
    display: none;
  }

  .poster img {
    width: 100%;
    height: 230px;
  }

  .control {
    width: 420px;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 2px auto;
  }

  .icons {
    width: 320px;
    position: relative;
    display: flex;
    overflow: hidden;
    margin: 2px auto;
  }

  .icon {
    position: relative;
    width: 80px;
    height: 100px;
    flex-shrink: 0;
    font-size: 12px;
    padding: 2px;
    text-align: center;
    border: 1px solid white;
  }

  .icon img {
    width: 100%;
    height: 80px;
  }

  .right,
  .left {
    border-top: 25px solid transparent;
    border-bottom: 25px solid transparent;
    width: 0;
  }

  .right {
    border-left: 30px solid yellow;
  }

  .left {
    border-right: 30px solid yellow;
  }
</style>

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

  <h2 class="ct">預告片介紹</h2>
  <div class="rb tab" style="width:100%">

    <div class="posters">
      <?php
      $rows=$Poster->posters();
      foreach($rows as $row){
      ?>
      <div class="poster" data-ani="<?=$row['ani'];?>">
        <img src="./upload/<?=$row['img'];?>" alt="">
        <div class="name">
          <?=$row['name'];?>

        </div>

      </div>
      <?php
      }
      ?>
    </div>


    <div class="control">
      <div class="left"></div>
      <div class="icons">
      <?php
      foreach($rows as $row){
        ?>
        <div class="icon">
          

          <img src="./upload/<?=$row['img'];?>" alt="">
          <div class="name"> <?=$row['name'];?></div>
        </div>
        <?php
      }
      ?>
      </div>
      <div class="right">

      </div>
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
            <?= $Movie->level($row['level']); ?>
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

<script>
  $(".poster").eq(0).show();
  let now=0;
  let icons=$(".icon").length;
  let counter=setInterval(()=>{ani();},3000);

  function ani(next){
    now=$(".poster:visible").index();
    
    if(typeof(next)=='undefined'){

      next=(now+1 <$(".poster").length)?now+1:0
    }

    let anicode=$('.poster').eq(next).data('ani');

    switch(anicode){
      case 1:
        $(".poster").eq(now).fadeOut(1000,()=>{
          $(".poster").eq(next).fadeIn(1000);
        });
        break;
      case 2:
        $(".poster").eq(now).slideUp(1000,()=>{
          $(".poster").eq(next).slideDown(1000);
        });
        break;
      case 3:
        $(".poster").eq(now).hide(1000,()=>{
          $(".poster").eq(next).show(1000);
        });
        break;
    }

    let p=0
    $(".right,.left").on("click",function(){
      if($(this).hasClass('left')){
        p=(p-1>=0)?p-1:p;
        console.log('inn')
      }else{
        p=((p+1)<=(icons-4))?p+1:p;
      }
      console.log('icons',icons)
      console.log('p',p)

      $(".icon").animate({right:80*p});
    })

    $(".icon").on("click",function(){
      let idx=$(this).index();
      ani(idx);
    })
    $(".icon").hover(function(){
      clearInterval(counter)
    },function(){
      counter=setInterval(()=>{
        ani();
      },3000);
    })
  }
</script>