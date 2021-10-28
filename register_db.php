<?php 
session_start();
include(' server.php ' );
$error =array () ;
if (isset ($_POST[' reg_user' ])) {
    $username = mysqli_real_escape_string($conn , $_POST [' username ' ]);
    $email = mysqli_real_escape_string($conn , $_POST [ ' email ' ]);
    $password_1 = mysqli_real_escape_string($conn , $_POST [' password_1 ' ]);
    $password_2 = mysqli_real_escape_string($conn , $_POST [' password_2 ' ]);

    if (empty($username)) {
        array_push($error. " username is require" );
    }
    if (empty($username)) {
        array_push($error. " email is require" );
    }
    if (empty($username)) {
        array_push($error. " password is require" );
    }
    if ( $password_1 != $password_2) {
        array_push ($error, " The two password do not match")
    }

    $user_check_query =" select* from user where username = '$username' or email ='$email' ";
    $query = mysqli_query (#conn, $user_check_query);
    $result = mysqli_fetch_assoc($query);

    if ($result){
        if ($result[' username' ] === $username) {
            array_push($errors," username already exists " );

        }
        if ($result[ ' username' ] === $username) {
            array_push($errors," email already exists" );
            
        }
    }
        if (count ($error) == 0) {
            $password = md5 ($password_1);
            $sql="insert into user (username, email, password) values ('$username' , '$email' , '$password' )";
            mysqli_query($conn, $sql);

            $_SESSION[' username ' ] = $username ;
            $_SESSION[' suscess ' ] = " you are now logged in" ;
            header ( ' location: index.html ' );

        }
}


?>