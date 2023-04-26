<?php 
 require "retrieveuser.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Registration</title>
</head>
<body>
  <h1>Registration Form</h1>
  <form action="index.php" method="post">
    <input type="submit" name="logout" id="logout" class="btn btn-warning" value="LOGOUT">
  </form>
  <!-- <h2><?php echo $welcome?></h2> -->
  <h3>Create User</h3>
  <form action="createuser.php" method="POST">
    <input type="text" name="user_name" id="user_name" placeholder="Enter first name" required>
    <input type="password" name="password" id="password" placeholder="Enter your password" required>
      <select name="user_role" id="user_role">
        <option value="">Select your User Role</option>
        <option value="user">User</option>
        <option value="admin">Admin</option>
      </select>
      <input type="submit" name="submit" id="submit" value="Create">
  </form>

  <section class="container mt-10%">
    <table class="table m-2 table-dark text-light">
      <thead>
        <tr>
          <th><a href="?column=user_id$sort=<?php echo $sort ?>">ID</a></th>
          <th><a href="?column=user_name$sort=<?php echo $sort ?>">First Name</a></th>
          <th><a href="?column=user_role$sort=<?php echo $sort ?>">User Role</a></th>
        </tr>
      </thead>
      <tbody>
        <?php
        
          while ($row = mysqli_fetch_array($result))
          {?>
              <tr>
                <td><?php echo $row['user_id']?></td>
                <td><?php echo $row['user_name']?></td>
                <td><?php echo $row['user_role']?></td>
              </tr>
              <?php
            } 
        ?>
      </tbody>
    </table>
  </section>

</body>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>