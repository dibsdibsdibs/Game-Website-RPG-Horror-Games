<?php
    session_start();
    if(!$_SESSION["account"]){  
        $error = "Please log in!";
        $_SESSION["error"] = $error; 
        header("Location: login.php");
    }

    if (isset($_SESSION['lastactivity']) && (time() - $_SESSION['lastactivity'] > 600)) {
        header("Location: logout.php");
        exit();
    }
    $_SESSION['lastactivity'] = time();
?>

<!DOCTYPE html>
<html>
<!--HTML for Download-->

<head>
    <meta http-equiv="refresh" content="601">
    <title>Download</title>
    <link rel="icon" href="pics/icon.png">
    <link href="styles/downloadDesign.css" rel="stylesheet" />
    <link href="styles/generalDesign.css" type="text/css" rel="stylesheet" />
</head>

<body class="bg">
    <!--Header bar section-->
    <header class="headerBar">
        <img src="pics/skull.png" class="icon">
        <h1>DOWNLOAD</h1>
        <img src="pics/menu.png" class="icon" id="menuBar" onclick="navigationBar()">
    </header>
    <div id="user">
        <?php
            if(isset($_SESSION["account"])){
                $account = $_SESSION["account"];
                echo "User: <span>$account</span>";
            }
        ?>
    <div>
    <!--Navigation options section-->
    <div id="menuOptions" onclick="redirectPage(event)">
        <ul>
            <li id="menuHome">HOME</li>
            <li id="menuCollection">COLLECTION</li>
            <li id="menuAbout">ABOUT</li>
            <li id="menuNews">NEWS</li>
            <li id="menuAccount">LOG OUT</li>
        </ul>
    </div>
    <!--Place information acquired from database and display it-->
    <div id="aboutGame">
        <img src="
            <?php
                echo $_SESSION["profile"];
            ?>
        " id="profile">
        <div>
            <h2>
                <?php
                    $title = $_SESSION['title'];
                    $creator = $_SESSION['creator'];
                    echo "<span>$title by $creator</span>";
                ?>
            </h2>
            <p>
                <?php
                    $summary = $_SESSION['summary'];
                    echo "<span>$summary</span>";
                ?>
            </p>
            <button type="submit" id="dllink">DOWNLOAD</button>
            <script>
                var btn = document.getElementById('dllink');
                btn.addEventListener('click', function() {
                document.location.href = '<?php echo $_SESSION['link']; ?>';
                });
            </script>
        </div>
    </div>
    <p class="tagline">fear shows true creativity</p>
    <script src="scripts/rpgjs.js" type="text/javascript"></script>
</body>

</html>
