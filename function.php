<?php
  function table_all_user() {
    global $db;
    $query = "SELECT * FROM users";
    $results = mysqli_query($db, $query);
    $data = array( );
    while($row = mysqli_fetch_assoc($results)) {
      array_push($data,$row);
    }
    return $data;
  }
  function one_user($id) {
    global $db;
    $query = "SELECT * FROM users where user_id='$id'";
    $results = mysqli_query($db, $query);
    return mysqli_fetch_assoc($results);
  }
  function user_insert($user,$email) {
    global $db;
    $id = rand_text(10);
    return $id;
    // $query = "SELECT * FROM users where user_id='$id'";
    // $results = mysqli_query($db, $query);
    // return mysqli_fetch_assoc($results);
  }
  function file_in($file) {
    // global $db;
    // $query = "SELECT * FROM users where user_id='$id'";
    // $results = mysqli_query($db, $query);
    // return mysqli_fetch_assoc($results);
    return "./file/data.zip";
  }
 ?>
