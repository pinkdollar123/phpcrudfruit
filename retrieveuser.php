<?php 
  require "connection.php";

  $column = "user_id";
  $sort = "ASC";
  
  if (isset($_GET['column']) && isset($_GET['sort']))
    {
      $column = $_GET['column'];
      $sort = $_GET['sort'];
      $sort == "ASC" ? $sort = "DESC" : $sort = "ASC";
    }{
    $sql = "SELECT * from users order by $column $sort";
  }
  

  $result = mysqli_query($connection,$sql) or 
  trigger_error("Failed SQL". mysqli_error($connection),E_USER_ERROR);

?>