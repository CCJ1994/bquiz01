<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
  <p class="t cent botli"><?=$tstr[$do];?></p>
  <form action="api/edit.php" method="post" enctype="multipart/form-data">
    <table width="100%">
      <tbody>
        <tr class="yel">
          <td width="60%">校園映像資料圖片</td>
          <td width="10%">顯示</td>
          <td width="10%">刪除</td>
          <td width="20%"></td>
        </tr>
        <?php 
        $total=$Image->count();
        $div=3;
        $pages=ceil($total/$div);
        $now=(isset($_GET['p']))?$_GET['p']:1;
        $start=($now-1)*$div;
        $rows=$Image->all("limit $start ,$div");
        foreach ($rows as $key => $row) { ?>
          <tr class="cent">
          <td class=""><img style="width:200px;height:100px;" src="./img/<?=$row['img'];?>" alt=""></td>
          <td><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?> ></td>
          <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>" id=""></td>
          <input type="hidden" name="id[]" value="<?=$row['id'];?>" id="">
          <td><input type="button" value="更換圖片" onclick="op('#cover','#cvr','./modal/upload.php?do=<?=$do;?>&id=<?=$row['id'];?>')"></td>
        </tr>
        <?php }?>
        <tr class="cent">
          <td colspan="4">
          
      <?php if(($now-1)>0){ ?>
        <a href="?do=image&p=<?=$now-1?>"><</a>
      <?php } 
      for($i=1;$i<=$pages;$i++) {
        $size='20px';  
        if($i==$now){?>
  
        <a style="font-size:<?=$size;?>;" href="?do=image&p=<?=$i?>"><?=$i;?></a>
        <?php }else{?>

        <a style="font-size:15px;" href="?do=image&p=<?=$i?>"><?=$i;?></a>
        <?php }
      }

        if(($now+1)<=$pages){?>
        <a href="?do=image&p=<?=$now+1?>">></a>
        <?php }?>
          </td>
        </tr>
      </tbody>
    </table>
    
    <table style="margin-top:40px; width:70%;">
      <tbody>
        <tr>
          <input type="hidden" name="table" value="<?=$do;?>" id="">
          <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?do=<?=$do;?>')" value="新增校園映像資料圖片">
          </td>
          <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </tr>
      </tbody>
    </table>

  </form>
</div>