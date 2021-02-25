<?php 
include_once "../base.php";
?>
<h2 class="cent">編輯次選單</h2>
<hr>
<form action="api/editsub.php" method="post" enctype="multipart/form-data">
  <table style="margin:auto;">
    <tr>
      <td>次選單名稱</td>
      <td>次選單連結網址</td>
      <td>刪除</td>
    </tr>
    <?php 
    $rows=$Menu->all(['parent'=>$_GET['id']]);
    foreach ($rows as $key => $row) { ?>
      
    <tr>
      <td><input type="text" name="text[]" value="<?=$row['text'];?>"></td>
      <td><input type="text" name="href[]" value="<?=$row['href'];?>"></td>
      <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
    </tr>
    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
    <?php  } 
    ?>
    
    <tr id="more" class="cent">
      <td colspan="3">
        <input type="hidden" name="table" value="<?=$_GET['do'];?>">
        <input type="hidden" name="parent" value="<?=$_GET['id'];?>">
        <input type="submit" value="修改確認">
        <input type="reset" value="重置">
        <input type="button" value="更多次選單" onclick="more()" id="btn">
      </td>
    </tr>
  </table>
</form>
<script>
  function more(){
    $("#more").before(`<tr>
            <td><input type="text" name="text2[]" value=""></td>
            <td><input type="text" name="href2[]" value=""></td>
            </tr>
        `)
  }
</script>