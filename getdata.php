<?php 
  require "connection.php";
// if the form post is called delete
  if (isset($_POST['deletefruit']))
  {
    $fruit_id = $_POST['fruit_id'];
    $sql = "SELECT fruit_name, quantity, unit_name from fruits inner join unit_measure on fruits.measure_of_unit = unit_measure.unit_id where fruit_id = '$fruit_id' ";
    $result = mysqli_query($connection, $sql) or trigger_error("Failed SQL:". mysqli_error($connection),E_USER_ERROR);
    $row = mysqli_fetch_array($result);
  }

  if (isset($_POST['deleteAccount']))
  {
    $fruit_id = $_POST['fruit_id'];
    $sql = "DELETE from fruits where fruit_id = '$fruit_id'";
    $result = mysqli_query($connection, $sql) or trigger_error("FAILED SQL:". mysqli_error($connection),E_USER_ERROR);
    echo "<script> alert('Successfully deleted') </script>";
    echo "<script> window.location.href = 'registerfruit.php' </script>";
  }

  ?>