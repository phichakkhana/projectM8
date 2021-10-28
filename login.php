<?php include ('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <h2> Login </h2>

    </div>
    <form action="register_db.php " mothod ="post">
    <?php if (isset($_SESSION ['error'])) ;?>
       <div class ="success" >
           <h3> 
               <?php
               echo ($_SESSION['error']);
               unset($_SESSION['error']);
               ?>
           </h3>
        </div>
 

        <div class="input-group">
            <label for="input-group">username</label>
            <input type="text" name="username">
        </div>

        <div class="input-group">
            <label for="password">password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class="btn">login</button>
        </div>
        <p> Not yet a member <a href="register.php">sign in</a></p>
    </form>

</body>

</html>