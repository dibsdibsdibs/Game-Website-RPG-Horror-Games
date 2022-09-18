<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="icon" href="pics/icon.png">
    <link href="styles/signupDesign.css" type="text/css" rel="stylesheet" />
    <link href="styles/generalDesign.css" type="text/css" rel="stylesheet" />
</head>

<body class="bg">
    <!--Header bar section-->
    <header class="headerBar">
        <img src="pics/skull.png" class="icon">
        <h1>RPG HORROR GAMES</h1>
        <img src="pics/menu.png" class="icon" id="menuBar" onclick="navigationBar()">
    </header>
    <!--Navigation options section-->
    <div id="menuOptions" onclick="redirectPage(event)">
        <ul>
            <li id="menuHome">HOME</li>
            <li id="menuCollection">COLLECTION</li>
            <li id="menuAbout">ABOUT</li>
            <li id="menuNews">NEWS</li>
        </ul>
    </div>
    <div id="signup"> 
        <div id="inputblock">
            <h1>SIGN UP</h1>
            <p>Already have an account? Sign in<button type="submit" id="here" onclick="toLogIn()">here</button>.</p>
            <form action="register.php" method="post">
                <div id="error">
                <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>
                </div>
            <label>Email</label>
            <input type="text" id="email" name="email" placeholder="Email" required><br>
            <label>Name</label>
            <input type="text" id="name" name="name" placeholder="Name" required><br>
            <label>Username</label>
            <input type="text" id="username" name="username" placeholder="Username" required><br>
            <label>Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required><br>
            <input type="checkbox" id="check" onclick=toggle()>
            <label id="toggle">Show Password</label></br>
            <label>Confirm Password</label>
            <input type="password" id="repassword" name="repassword" placeholder="Password" required><br>
            <input type="checkbox" id="check" onclick=retoggle()>
            <label id="toggle">Show Password</label></br>
            <button type="submit" id="submit">SUBMIT</button>
        </div>
    </div>
    </form>
    <p class="tagline">fear shows true creativity</p>
    <script src="scripts/rpgjs.js" type="text/javascript"></script>
</body>
</html>

<?php
    unset($_SESSION["error"]);
?>