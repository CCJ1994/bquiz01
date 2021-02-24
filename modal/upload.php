<?php 
include_once "../base.php";
?>
<h2 class="cent">更換圖片</h2>
<hr>
<form action="api/add.php" method="post" enctype="multipart/form-data">
  <table style="margin:auto;">
    <tr>
      <td>標題圖片:</td>
      <td><input type="file" name="img" id=""></td>
    </tr>
    <tr>
      <td>標題替代文字</td>
      <td><input type="text" name="text" id=""></td>
    </tr>
  </table>
  <div class="cent">
    <input type="hidden" name="table" value="<?=$_GET['do'];?>">
    <input type="submit" value="新增">
    <input type="reset" value="重置">

  </div>
</form>