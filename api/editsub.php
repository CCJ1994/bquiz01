<?php
include_once "../base.php";
print_r($_POST);
$db=new DB($_POST['table']);
foreach ($_POST['id'] as $key => $id) {
  
  if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
    $db->del($id);
  }else{
    $row=$db->find($id);

    
    $row['text']=$_POST['text'][$key];
    $row['href']=$_POST['href'][$key];
    $db->save($row);
  }
}
    if(isset($_POST['text2'])){
      foreach ($_POST['text2'] as $key => $text) {
        $add=[];
        $add['text']=$text;
        $add['href']=$_POST['href2'][$key];
        $add['parent']=$_POST['parent'];
        $add['sh']=1;
    $db->save($add);

      }
  }


to("../backend.php?do={$_POST['table']}");

?>