<?php 
  require "connection.php";

  $column = "fruit_id";
  $sort = "ASC";
  
  if (isset($_GET['column']) AND isset($_GET['sort']))
    {
      $column = $_GET['column'];
      $sort = $_GET['sort'];
      $sort == "ASC" ? $sort = "DESC" : $sort = "ASC";
    }{
    $sql = "SELECT fruit_id, fruit_name, quantity, unit_name from fruits inner join unit_measure on fruits.measure_of_unit = unit_measure.unit_id order by $column $sort";
  }
  
  $result = mysqli_query($connection,$sql) or 
  trigger_error("Failed SQL". mysqli_error($connection),E_USER_ERROR);

?>