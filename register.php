<?php include ('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Register page</title>
     <link rel="stylesheet" href="style.css">
</head>

<body>
     <div class="header">
          <h2> Register </h2>

     </div>
     <form action="register_db.php" method="post">
               <?php include('error.php'); ?>
          <div class="input-group">
               <label for="input-group">username</label>
               <input type="text" name="username">
          </div>

          <div class="input-group">
               <label for="email">email</label>
               <input type="email" name="email">
          </div>
          <div class="input-group">
               <label for="password">password</label>
               <input type="password" name="password_1">
          </div>
          <div class="input-group">
               <label for="password_2">confilm password</label>
               <input type="password" name="password_2">
          </div>
          <div class="input-group">
               <button type="submit" name="reg_user" class="btn">register</button>
          </div>
          <p> already a member ? <a href="login.php">sign in</a></p>
     </form>

</body>

</html>