<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
  <p class="t cent botli"><?=$tstr[$do];?></p>
  <form action="api/edit.php" method="post" enctype="multipart/form-data">
    <table width="100%">
      <tbody>
        <tr class="yel">
          <td width="60%">動態文字廣告</td>
          <td width="7%">顯示</td>
          <td width="7%">刪除</td>
        </tr>
        <?php 
        $rows=$Ad->all();
        foreach ($rows as $key => $row) { ?>
          <tr class="">
          <td><textarea style="width:600px;" name="text[]"><?=$row['text'];?></textarea></td>
          <td><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?> ></td>
          <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>" id=""></td>
          <input type="hidden" name="id[]" value="<?=$row['id'];?>" id="">
        </tr>
        <?php }?>
      </tbody>
    </table>
    <table style="margin-top:40px; width:70%;">
      <tbody>
        <tr>
          <input type="hidden" name="table" value="<?=$do;?>" id="">
          <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?do=<?=$do;?>')" value="新增動態文字廣告">
          </td>
          <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </tr>
      </tbody>
    </table>

  </form>
</div>