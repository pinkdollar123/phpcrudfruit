<?php 
require "connection.php";
  if(isset($_POST))
  {
    $user_name = $_POST['user_name'];
    // encrypts the password using password_has
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $user_role = $_POST['user_role']; 
    $sql = "INSERT INTO users set user_name = '$user_name', password = '$password', user_role = '$user_role'";
  
    $result = mysqli_query($connection,$sql) or 
    trigger_error("Failed SQL". mysqli_error($connection).E_USER_ERROR);

    echo "<script> alert('Successfully created') </script>";
    echo "<script> window.location.href = 'user.php' </script>";
  }
  else
  {
    echo "<script> window.location.href = 'user.php' </script>";
  }


?>