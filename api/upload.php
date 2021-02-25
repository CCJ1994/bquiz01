<?php
include_once "../base.php";

$db=new DB($_POST['table']);
$data=$db->find($_POST['id']);
if(!empty($_FILES['img']['tmp_name'])){
  move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$_FILES['img']['name']);
  $data['img']=$_FILES['img']['name'];
}

if(!empty($_POST['text'])){
  $data['text']=$_POST['text'];
}

$db->save($data);
to("../backend.php?do={$_POST['table']}");

?>