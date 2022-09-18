<?php
    include 'dbconnector.php';
    session_start();
    $error = "";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $result = $conn -> query("SELECT * FROM users WHERE username = '$username'");

    if(mysqli_num_rows($result) === 1){
        $result = $conn -> query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
        if(mysqli_num_rows($result) === 1){
            $_SESSION["account"] = $username;
            header("Location: homepage.php");
            exit();
        }else{
            $error = "Password is invalid.";
        }
    }else{
        $error = "Username does not exist.";
    }
    $_SESSION["error"] = $error; 
    header("Location: login.php");
?>