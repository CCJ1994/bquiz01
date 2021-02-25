<?php 
include_once "base.php";
?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://127.0.0.1/test/exercise/collage/? -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>卓越科技大學校園資訊系統</title>
  <link href="./css/css.css" rel="stylesheet" type="text/css">
  <script src="./js/jquery-1.9.1.min.js"></script>
  <script src="./js/js.js"></script>
</head>

<body>
  <div id="cover" style="display:none; ">
    <div id="coverr">
      <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
        onclick="cl('#cover')">X</a>
      <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
    </div>
  </div>
  <iframe style="display:none;" name="back" id="back"></iframe>
  <div id="main">
  <a title="<?=$Title->find(['sh'=>1])['text'];?>" href="index.php">
      <div class="ti" style="background-size:cover;">
      <img src="./img/<?=$Title->find(['sh'=>1])['img'];?>" style="width:100%;">
      </div>
      <!--標題-->
    </a>
    <div id="ms">
      <div id="lf" style="float:left;">
        <div id="menuput" class="dbor">
          <!--主選單放此-->
          <span class="t botli">主選單區</span>
          <?php $mainmu=$Menu->all(['sh'=>1,'parent'=>0]) ;
          foreach ($mainmu as $key => $main) { ?>
            <div class="mainmu">
              <a href="<?=$main['href'];?>"><?=$main['text'];?></a>
              <div class="mw" style="display:none;">
              <?php if($Menu->count(['parent'=>$main['id']])>0){
                $subs=$Menu->all(['parent'=>$main['id']]);
                foreach ($subs as $key => $sub) { ?>
                  <a href="<?=$sub['href'];?>">
                    <div class="mainmu2"><?=$sub['text']?></div>
                  </a>      
            <?php }
              } ?>
              </div>
            </div>
          
          <?php } ?>
        </div>
        <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
          <span class="t">進站總人數 :
          <?=$Total->find(1)['total'];?>
          </span>
        </div>
      </div>

      <?php
      $do=(isset($_GET['do']))?$_GET['do']:'main';
      $file="./front/".$do.".php";
      if(file_exists($file)){
        include_once $file;
      }else{
        include_once "./front/main.php";
      }

      ?>
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
      <div class="di di ad" style="height:540px; width:23%; padding:0px; margin-left:22px; float:left; ">
        <!--右邊-->
        <?php if(empty($_SESSION['login'])){?>
        <button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;"
          onclick="lo('?do=login')">管理登入</button>
          <?php }else{?>
            <button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;"
              onclick="lo('backend.php')">返回管理</button>

          <?php }?>
        <div style="width:89%; height:480px;" class="dbor">
          <span class="t botli">校園映象區</span>
          <script>
          var nowpage = 0,
            num = 0;

          function pp(x) {
            var s, t;
            if (x == 1 && nowpage - 1 >= 0) {
              nowpage--;
            }
            if (x == 2 && (nowpage + 1) * 3 <= num * 1 + 3) {
              nowpage++;
            }
            $(".im").hide()
            for (s = 0; s <= 2; s++) {
              t = s * 1 + nowpage * 1;
              $("#ssaa" + t).show()
            }
          }
          pp(1)
          </script>
        </div>
      </div>
    </div>
    <div style="clear:both;"></div>
    <div
      style="width:1024px; left:0px; position:relative; background:#FC3; margin-top:4px; height:123px; display:block;">
      <span class="t" style="line-height:123px;"><?= $Bottom->find(1)['bottom'];?></span>
    </div>
  </div>

</body>

</html>