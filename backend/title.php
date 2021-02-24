<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
  <p class="t cent botli"><?=$tstr[$_GET['do']];?></p>
  <form action="api/edit.php" method="post" enctype="multipart/form-data">
    <table width="100%">
      <tbody>
        <tr class="yel">
          <td width="45%">網站標題</td>
          <td width="25%">替代文字</td>
          <td width="7%">顯示</td>
          <td width="7%">刪除</td>
          <td></td>
        </tr>
        <?php 
        $rows=$Title->all();
        foreach ($rows as $key => $row) { ?>
          <tr class="">
          <td><img style="width:300px;height:30px;" src="./img/<?=$row['img'];?>" alt=""></td>
          <td><input type="text" name="text" value="<?=$row['text'];?>"></td>
          <td><input type="checkbox" name="sh" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?> ></td>
          <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>" id=""></td>
          <input type="hidden" name="id[]" value="<?=$row['id'];?>" id="">
          <input type="hidden" name="table" value="<?=$_GET['do'];?>" id="">
          <td><button onclick="op('#cover','#cvr','./modal/upload.php?do=<?=$do;?>')">更換圖片</button></td>
        </tr>
        <?php }?>
      </tbody>
    </table>
    <table style="margin-top:40px; width:70%;">
      <tbody>
        <tr>
          <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?do=<?=$do;?>')" value="新增網站標題圖片">
          </td>
          <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </tr>
      </tbody>
    </table>

  </form>
</div>