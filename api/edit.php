<?php
include_once "../base.php";
print_r($_POST);
$db=new DB($_POST['table']);
foreach ($_POST['id'] as $key => $id) {
  
  if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
    $db->del($id);
  }else{
    $row=$db->find($id);
    switch ($_POST['table']) {
      case 'title':
        $row['sh']=($id==$_POST['sh'])?1:0;
        break;

    
    }
    $row['text']=$_POST['text'][$key];
    $db->save($row);
  }
}

to("../backend.php?do={$_POST['table']}");

?>