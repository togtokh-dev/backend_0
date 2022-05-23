<?php
include('./server.php');
header('Content-Type: application/json; charset=utf-8');
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);
if(count($_POST)==0){
  $_POST = $input;
}
if(isset($_GET['table_all_user'])){
  $data=array();
  if(table_all_user()){
    $data =table_all_user();
  }
  echo json_encode($data);
}
if(isset($_GET['one_user'])){
  $data=array();
  if(one_user($_GET['one_user'])){
    $data =one_user($_GET['one_user']);
  }
  echo json_encode($data);
}
if(isset($_GET['add_user'])){
  $data=array();
  if(user_insert($_POST['user'],$_POST['email'])){
    $data =user_insert($_POST['user'],$_POST['email']);
  }
  echo json_encode($data);
}

 ?>
