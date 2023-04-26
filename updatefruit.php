<?php 
require "connection.php";
require "session.php";
  if(isset($_POST['updatefruit']))
    {
      $fruit_id = $_POST['fruit_id'];
      $sql = "SELECT * FROM fruits WHERE fruit_id = '$fruit_id' ";
      $result = mysqli_query($connection,$sql) or trigger_error("Failed SQL". mysqli_error($connection),E_USER_ERROR);
      $row = mysqli_fetch_assoc($result);
    }
  if(isset($_POST['updateBtn']))
  {
    $fruit_id = $_POST['fruit_id'];
    $fruit_name = $_POST['fruit_name'];
    $quantity = $_POST['quantity'];
    $measure_of_unit = $_POST['measure_of_unit'];
    $sql = "UPDATE fruits set fruit_name = '$fruit_name', measure_of_unit = '$measure_of_unit', quantity = '$quantity' WHERE fruit_id = '$fruit_id'";
    $result = mysqli_query($connection,$sql) or trigger_error("Failed SQL". mysqli_error($connection),E_USER_ERROR);

     echo "<script> alert('Successfully updated') </script>";
     echo "<script> window.location.href = 'registerfruit.php' </script>";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Form</title>
</head>
<body>
  <h3>Update User</h3>
  <form action="updatefruit.php" method="post">
    <input type="text" name="fruit_name" id="fruit_name" placeholder="Enter first name" required value=" <?php echo $row['fruit_name']?> ">
    <input type="number" name="quantity" id="quantity" placeholder="Quantity" required value="<?php echo $row['quantity'] ?>">
    <select name="measure_of_unit" id="measure_of_unit">
        <option value="">Select your measure_of_unit</option>
        <option value="<?php echo $row['measure_of_unit'] == "1" ? 'selected': "Grams" ?>">Grams</option>
        <option value="<?php echo $row['measure_of_unit'] == "2" ? 'selected': "Kilograms" ?>">Kilograms</option>
        <option value="<?php echo $row['measure_of_unit'] == "3" ? 'selected': "Sack/s" ?>">Sack/s</option>
        <option value="<?php echo $row['measure_of_unit'] == "4" ? 'selected': "Piece/s" ?>">Piece/s</option>
        <option value="<?php echo $row['measure_of_unit'] == "5" ? 'selected': "Pounds" ?>">Pounds</option>
    </select>
      <input type="submit" name="updateBtn" id="updateBtn" value="Confirm Update">
  </form>
</body>
</html>