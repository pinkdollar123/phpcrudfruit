<?php 
 require "retrievefruits.php";
 require "session.php";

 if($_SESSION['user_role'] == 'admin'){
  $welcome = "Welcome " . $_SESSION['user_name']. " " . $_SESSION['user_role'];
  $isAdmin = true;
  $adminAction = '<th>Action</th>';
 }
 else
 {
  $welcome = "Welcome" . $_SESSION['user_role'];
  $isAdmin = false;
  $adminAction = '';
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>FRUIT REGISTRATION</title>
</head>
<body>
  <h1>REGISTER YOUR FRUIT</h1>
  <!-- <form action="logout.php" method="post">
    <input type="submit" name="logout" id="logout" class="btn btn-warning" value="LOGOUT">
  </form> -->
  <h2><?php echo $welcome?></h2>
  <h3>Insert your Fruit</h3>
  <form action="create.php" method="POST">
    <input type="text" name="fruit_name" id="fruit_name" placeholder="Enter fruit name" required>
    <input type="number" name="quantity" id="quantity" placeholder="Enter the quantity" required>
    <select name="measure_of_unit" id="measure_of_unit">
        <option value="">Select unit of Measure </option>
        <option value="1">Grams</option>
        <option value="2">Kilograms</option>
        <option value="3">Sack/s</option>
        <option value="4">Piece/s</option>
        <option value="5">pounds</option>
    </select>
      <input type="submit" name="submit" id="submit" value="Create">
  </form>

  <section class="container mt-10%">
    <table class="table m-2 table-dark text-light">
      <thead>
        <tr>
          <th><a href="?column=fruit_id$sort=<?php echo $sort ?>">Fruit ID</a></th>
          <th><a href="?column=fruit_name$sort=<?php echo $sort ?>">Fruit Name</a></th>
          <th><a href="?column=quantity$sort=<?php echo $sort ?>">Quantity</a></th>
          <th><a href="?column=measure_of_unit$sort=<?php echo $sort ?>">Measure of Unit</a></th>
          <?php echo $adminAction?>
        </tr>
      </thead>
      <tbody>
        <?php
        
          while ($row = mysqli_fetch_array($result))
          {?>
              <tr>
                <td><?php echo $row['fruit_id']?></td>
                <td><?php echo $row['fruit_name']?></td>
                <td><?php echo $row['quantity']?></td>
                <td><?php echo $row['unit_name']?></td>
                <?php 
                if($_SESSION['user_role'] == 'admin')
                {

                ?>
                <td class="d-flex gap-3">
                  <form action="updatefruit.php" method="post">
                    <input type="submit" name="updatefruit" id="updatefruit"
                    value="Update">
                    <input type="hidden" name="fruit_id" id="fruit_id" value="<?php echo $row['fruit_id']?>">
                  </form>
                
                  <form action="deletefruit.php" method="post">
                    <input type="submit" name="deletefruit" id="deletefruit"
                    value="Delete">
                    <input type="hidden" name="fruit_id" id="fruit_id" value="<?php echo $row['fruit_id']?>">
                  </form>
                  </td>
              </tr>
              <?php
            }}
        ?>
      </tbody>
    </table>
  </section>

</body>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>