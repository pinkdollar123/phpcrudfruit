<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">
  <title>PHP FRUIT</title>
</head>
<body>
  <section class="container">
    <h2>Login</h2>
    <form name="loginForm" onsubmit="validation()" action="authenticate.php" method="post">
      <label for="user_name">Username:</label>
      <input type="text" name="user_name" id="user_name" class="form-control w-50">
      <label for="Password">Password:</label>
      <input type="password" name="password" id="password" class="form-control w-50">
      <input type="submit" class="btn btn-success" onclick="validation()" value="Submit">
    </form>
    <form action="user.php">
    <input type="submit" class="btn btn-warning" value="Create Account">
    </form>
    
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script>
    function validation(){
      let email = document.loginForm.email.value;
      let password = document.getElementById('password').value;

      if(email == "" || password == "")
      {
       return alert('Fields are empty');
      }
    }
  </script>
</body>
</html>