<?php 
  require "getdata.php";
// if the form post is called delete
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Delete Fruit</title>
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="card-title">
        Delete Fruit
      </div>
      <div class="card-body">
        <p class="card-text">
          Are you sure you want to delete this Fruit below?
        </p>
      </div>
    </div>
  <!-- Data of the selected user -->
  <form action="getdata.php" method="post">
  <input type="text" name="fruit_name" id="fruit_id"
    value="<?php echo $row['fruit_name']?>" readonly>
    <input type="text" name="quantity" id="quantity" value=" <?php echo $row['quantity']?>" readonly>
    <input type="text" name="unit_name" id="unit_name"  value="<?php echo $row['unit_name'] ?>" readonly>
    <input type="submit" name="deleteAccount" id="deleteAccount" value="Confirm Delete">
  </form>
  </div>
  
  
</body>
</html>