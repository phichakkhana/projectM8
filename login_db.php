<?php 
session_start();
include('server.php');

$erors = array ();
if (isset ($_POST ['login_user'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($username)) {
        array_push ($erors, "username is req");
    }
    if (empty($password)) {
        array_push ($erors, "password is req");
    }
    if (count($erors)== 0){
        $password = md5($password);
        $query ="select * from user where username = '$username' and password ='$password'" ;
        $result = mysqli_num_row($result) == 1) {
            $_SESSION['username']= $username ;
            $_SESSION['Success']= "You are now lodded in ";
            header ("location: index.php");

        } else{
            array_push($erors, "wrong username/password combination");
            $_SESSION['error']= "wrong username/password combination ";
            header ("location: login.php");
        }
    }

}