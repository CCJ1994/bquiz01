<?php
include_once "../base.php";
// echo $_GET['id'];
$subs=$Menu->all(['parent'=>$_GET['id']]);
// print_r($subs);
?>

<h3>編輯次選單</h3>
<hr>
<form action="./api/editsub.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
    <td>次選單文字:</td>
    <td>次選單連結:</td>
    <td>刪除</td>
    </tr>
    <tr>
    <?php
    foreach($subs as $sub){
?>

        <td><input type="text" name="text[]" value="<?=$sub['text'];?>"></td>
        <td><input type="text" name="href[]" value="<?=$sub['href'];?>"></td>
        <td><input type="checkbox" name="del[]" value="<?=$sub['id'];?>"></td>
        <td><input type="hidden" name="id[]" value="<?=$sub['id'];?>"></td>
        <?php
    }
    ?>
    </tr>
    <tr>
        <td colspan="2">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="submit" value="修改確定">
            <input type="reset" value="重置">
            <input type="button" value="更多次選單">
        </td>

    </tr>
</table>
    
    

</form>
