<?php 
require "connection.php";
  if(isset($_POST))
  {
    $fruit_name = $_POST['fruit_name'];
    $measure_of_unit = $_POST['measure_of_unit'];
    $quantity = $_POST['quantity'];
    // encrypts the password using password_has
    $sql = "INSERT INTO fruits set fruit_name = '$fruit_name',
    measure_of_unit = '$measure_of_unit', quantity = '$quantity'";
  
    $result = mysqli_query($connection,$sql) or 
    trigger_error("Failed SQL". mysqli_error($connection).E_USER_ERROR);

    echo "<script> alert('Successfully created') </script>";
    echo "<script> window.location.href = 'registerfruit.php' </script>";
  }
  else
  {
    echo "<script> window.location.href = 'registerfruit.php' </script>";
  }


?>