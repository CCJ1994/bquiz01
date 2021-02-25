<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
  <p class="t cent botli"><?=$tstr[$do];?></p>
  <form action="api/edit.php" method="post" enctype="multipart/form-data">
    <table width="100%">
      <tbody>
        <tr class="yel">
          <td width="40%">帳號</td>
          <td width="40%">密碼</td>
          <td width="7%">刪除</td>
        </tr>
        <?php 
        $rows=$Admin->all();
        foreach ($rows as $key => $row) { ?>
          <tr class="cent">
          <td><input type="text" name="acc[]" value="<?=$row['acc'];?>"></td>
          <td><input type="password" name="pw[]" value="<?=$row['pw'];?>"></td>
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
          <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?do=<?=$do;?>')" value="新增新增管理者帳號">
          </td>
          <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </tr>
      </tbody>
    </table>

  </form>
</div>