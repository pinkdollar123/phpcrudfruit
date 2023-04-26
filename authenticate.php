<?php 
  include "connection.php";
  include "session.php";
  $user_name = trim($_POST['user_name']);
  $password = trim($_POST['password']);
  $sql = "SELECT * from users where user_name = '$user_name'";
  $result = mysqli_query($connection,$sql);
  $row = mysqli_fetch_array($result);
  
  $count = mysqli_num_rows($result);
  $_SESSION['user_name'] = $user_name;
  $_SESSION['user_role'] = $row['user_role'];
  $_SESSION['status'] = "valid";
  echo $count;
  header('Location: registerfruit.php');
?>