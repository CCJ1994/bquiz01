<div class="di"
  style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
  <?php include_once "front/marquee.php" ?>
  <div style="height:32px; display:block;"></div>
  <div class="t botli">最新消息區
  </div>
  
    <?php
    $total=$News->count();
    $div=5;
    $pages=ceil($total/$div);
    $now=(isset($_GET['p']))?$_GET['p']:1;
    $start=($now-1)*$div;
    $rows=$News->all("limit $start ,$div"); ?>
    <ol start="<?=$start+1;?>">
    <?php
      foreach ($rows as $key => $row) {  ?>
    <li class="sswww" style="margin:3px;"><?=mb_substr($row['text'],0,10);?>
      <div class="all" style="display:none;"><?=nl2br($row['text']);?></div>
    </li>
    <?php  }
          ?>
  </ol>
  <div id="altt"
    style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">

  </div>

  <!--正中央-->
  <div style="text-align:center;">

    <?php if(($now-1)>0){ ?>
        <a href="?do=news&p=<?=$now-1?>"><</a>
      <?php } 
      for($i=1;$i<=$pages;$i++) {
        $size='20px';  
        if($i==$now){?>
  
        <a style="font-size:<?=$size;?>;" href="?do=news&p=<?=$i?>"><?=$i;?></a>
        <?php }else{?>

        <a style="font-size:15px;" href="?do=news&p=<?=$i?>"><?=$i;?></a>
        <?php }
      }

        if(($now+1)<=$pages){?>
        <a href="?do=image&p=<?=$now+1?>">></a>
        <?php }?>

  </div>
</div>
<div id="alt"
  style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
</div>
<script>
$(".sswww").hover(
  function() {
    $("#alt").html("" + $(this).children(".all").html() + "").css({
      "top": $(this).offset().top - 50
    })
    $("#alt").show()
  }
)
$(".sswww").mouseout(
  function() {
    $("#alt").hide()
  }
)
</script>