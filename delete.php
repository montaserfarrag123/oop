<?php 

 require "./config/operation.php";
 $id = $_GET['id'];
 $operation = new operation;
  $result =  $operation->delete($id);

  if($result){
      header("location: index.php");
  }




?>