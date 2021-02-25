<?php 
include_once "../base.php";
?>
<h2 class="cent"><?=$addstr[$_GET['do']];?></h2>
<hr>
<form action="api/add.php" method="post" enctype="multipart/form-data">
  <table style="margin:auto;">
    <tr>
      <td>帳號:</td>
      <td><input type="text" name="acc" id=""></td>
    </tr>
    <tr>
      <td>密碼:</td>
      <td><input type="password" name="pw" id=""></td>
    </tr>
    <tr>
      <td>確認密碼:</td>
      <td><input type="password" name="pw2" id=""></td>
    </tr>
  </table>
  <div class="cent">
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
    <input type="submit" value="新增">
    <input type="reset" value="重置">

  </div>
</form>