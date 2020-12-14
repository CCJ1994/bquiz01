<?php
include_once "../base.php";


foreach($_POST['id'] as $key=>$id){
  if(isset($_POST['del']) && in_array($id,$_POST['del'])){

    $Menu->del($id);

}else{

    $row=$Menu->find($id);
    $row['text']=$_POST['text'][$key];
    $row['href']=$_POST['href'][$key];
    $Menu->save($row);
  }
}

if(isset($_POST['text2'])){
  
  foreach($_POST['text2'] as $key=>$text){
      if(!empty($text)){
      $add=[];
      $add['text']=$text;
      $add['href']=$_POST['href2'][$key];
      $add['parent']=$_POST['parent'];
      $add['sh']=1;
      
      $Menu->save($add);
    }
    
  }
}





to("../backend.php?do=menu");
?>