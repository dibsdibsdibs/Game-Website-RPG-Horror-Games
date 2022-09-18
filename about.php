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
<!--HTML for Homepage-->

<head>
    <meta http-equiv="refresh" content="601">
    <title>About</title>
    <link rel="icon" href="pics/icon.png">
    <link href="styles/aboutDesign.css" type="text/css" rel="stylesheet" />
    <link href="styles/generalDesign.css" type="text/css" rel="stylesheet" />
</head>

<body class="bg">
    <!--Header bar section-->
    <header class="headerBar">
        <img src="pics/skull.png" class="icon">
        <h1>ABOUT</h1>
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
            <li id="menuLogin">LOG OUT</li>
        </ul>
    </div>
    <!--Details about the Translator-->
    <div id="aboutvg">
        <img src="pics/vgperson.jpg" id="vgpersonpic">
        <div>
            <h2 onclick="toOfficial()">VGPerson</h2>
            <p>Hi! I'm Kate (she/her), but call me vg, vgperson, or vghime. I'm the popularly-elected Princess of Vocaloid and a prolific translator of Japanese.</p>
        </div>
    </div>
    <!--Links to social media accounts of translator-->
    <p class="borderText">Follow me on:</p>
    <div>
        <div class="socmed">
            <img src="pics/twitter.png" class="socmedpic" id="twitter" onclick="toTwitter()">
            <p>Where I announce most everything I do, translation or otherwise. I may make progress updates on things on occasion.</p>
        </div>
        <div class="socmed">
            <img src="pics/tumblr.png" class="socmedpic" id="tumblr" onclick="toTumblr()">
            <p>The same as above, but less; I mostly only post about translation releases and original creations here.</p>
        </div>
        <div class="socmed">
            <img src="pics/youtube.png" class="socmedpic" id="youtube" onclick="toYoutube()">
            <p>Where I post subtitled music videos, mostly. (Note my account was deleted in October 2015, but I reuploaded everything worthwhile and allowed to this new one.) Certain others can be found on <a onclick="toDailymotion()">Dailymotion</a>. The
                rest are available as <a onclick="toSoftsubs()">soft-subs</a>.</p>
        </div>
        <div class="socmed">
            <img src="pics/soundcloud.png" class="socmedpic" id="soundcloud" onclick="toSoundcloud()">
            <p>Where I post my original PXtone music. (Old account <a onclick="toOldSound()">here</a>.)</p>
        </div>
    </div>
    <p class="tagline">fear shows true creativity</p>
    <script src="scripts/rpgjs.js" type="text/javascript"></script>
</body>

</html>