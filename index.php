<?php 
    session_start();
    if (!isset($_session ['username'])) {
        $_session['msg'] ="You must log in first";
        header('location:login.php');
    }
    if (isset($_GET['logout'])){
        session_destroy();
        unset($_session['username']);
        header('location:login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header">
        <h2> Hello page </h2>
    </div>

   <div class ="content" >
       <?php if (isset($_SESSION ['success'])) ;?>
       <div class ="success" >
           <h3> 
               <?php
               echo $_SESSION['success'];
               unset($_SESSION['success']);
               ?>
           </h3>
</div>
    <?php endif ?>
       
   
    <?php if (isset($_SESSION['username']));?>
                <?php if (isset ($_session['username'])):?>
                <p> Welcome <strong><?php echo $_session['username']; ?></strong></p>
                <p><a href="index.php?logout='1'" style="color: red;">logout</a></p>
                <?php endif ?>
        </div>
</body>

</html>