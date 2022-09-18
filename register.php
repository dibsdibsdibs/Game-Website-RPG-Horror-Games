<?php
    include 'dbconnector.php';
    session_start();
    $error = "";

    if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['username'])
    && isset($_POST['repassword']) && isset($_POST['password'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            return $data;
        }
    }

    $email = validate($_POST['email']);
    $name = validate($_POST['name']);
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $repassword = validate($_POST['repassword']);

    $error = '';

    switch(true){
        case $password != $repassword:
            $error = "Passwords don't match!";
            break;
        case $password == $repassword:
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);
        
            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                $error = 'Password should be at least 8 characters in length and should include at least: 1 uppercase letter, 1 number, and 1 special character.';
                break;
            }
        default:
            $check_email  = $conn -> query("SELECT * FROM users WHERE email = '$email'");
            if(mysqli_num_rows($check_email) >= 1){
                $error = "Email is already used!";
            }else{
                $check_username = $conn -> query("SELECT * FROM users WHERE username = '$username'");
                if(mysqli_num_rows($check_username) >= 1){
                    $error = "Username is already used!";
                }else{
                    $password = md5($password);
                    $sql = "INSERT INTO users (name, email, username, password) VALUES ('$name', '$email', '$username', '$password')";
                    if($conn -> query($sql) == TRUE){
                        $error = "Log in into your new account.";
                        $_SESSION["error"] = $error;
                        header("Location: login.php");
                        exit();
                    }
                }
            }
    }
    $_SESSION["error"] = $error;
    header("Location: signup.php");
?>