<!-- Connect to Database syntax -->
<?php 
$host = "localhost";
$user = "root";
$password = "";
$db = "phpfruit";
$port = 3307;

$connection = mysqli_connect($host,$user,$password,$db,$port);
  
  if(mysqli_connect_error())
  {
    echo "Unable to connect to the database";
    echo "Message: ". mysqli_connect_error();
  }
?>