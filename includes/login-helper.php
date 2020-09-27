<?php

if(isset($_POST['login-submit'])){
    require 'dbhandler.php';
    $uname_email = $_POST['uname'];
    $passw = $_POST['pwd'];

    if(empty($uname_email) || empty($passw)){
        header("Location: ../login.php?error=EmptyField");
        exit();
    }

    $sql = "SELECT * FROM users WHERE uname=? OR email=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../login.php?error=SQLInjection");
        exit();
    }

    else{
        mysqli_stmt_bind_param($stmt, "ss", $uname_email, $uname_email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $data = mysqli_fetch_assoc($results);

        if(empty($data)){
            header("Location: ../login.php?error=UserDNE");
            exit();
        }
        else{
            $pass_check = password_verify($passw, $data['password']); ##the name of password in our data base is put here in the square brackets. 

            if($pass_check == true){
                session_start();
                $_SESSION['uid'] = $data['uid'];
                $_SESSION['fname'] = $data['fname'];
                $_SESSION['username'] = $data['username']; ##grabing info from our database

                header("Location: ../profile.php?login=Success");
                exit();
            }
            else{
                header("Location: ../login.php?error=WrongPass");
                exit();
            }

        }
    }

}
else{
    header("Location: ../login.php");
    exit();
}