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
    <title>RPG Horror Games</title>
    <link rel="icon" href="pics/icon.png">
    <link href="styles/homepageDesign.css" type="text/css" rel="stylesheet" />
    <link href="styles/generalDesign.css" type="text/css" rel="stylesheet" />
</head>

<body class="bg">
    <!--Header bar section-->
    <header class="headerBar">
        <img src="pics/skull.png" class="icon">
        <h1>RPG HORROR GAMES</h1>
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
    <!--Advertisement for featured game-->
    <div id="promotional" onclick="toPromo(event)">
        <div id="promoText">
            <p id="promoTitle">Mad Father</p>
            <p id="promoDesc">ENGLISH TRANSLATION OUT NOW!</p>
        </div>
        <img src="pics/promotional.png" id="promoPic">
    </div>
    <!--Section that shows featured game-->
    <div class="section" id="featGame" onclick="toDownload()">
        <img src="pics/madfather.png" id="featPic">
        <div id="featDesc">
            <p class="gameTitle">Mad Father by Miscreant's Room</p>
            <p>Aya Drevis is a young girl living in an isolated mansion in northern Germany.</p>
            <p>Since her mother's passing, she's felt lonely living with just her father and his assistant Maria.</p>
            <p>What's more, having heard the screams from the basement, she knows her father's secret...</p>
        </div>
    </div>
    <!--Section that shows other games-->
    <p class="borderText">CHECK OUT OTHER GAMES!</p>
    <div class="section" id="homeOthers">
        <div>
            <img src="pics/ibtitle.png" class="picsOthers">
            <p class="gameTitle">Ib by Kouri</p>
        </div>
        <div>
            <img src="pics/crookedmantitle.png" class="picsOthers">
            <p class="gameTitle" id="tcmpic">The Crooked Man by Uri</p>
        </div>
        <div>
            <img src="pics/mermaidswamptitle.png" class="picsOthers">
            <p class="gameTitle">Mermaid Swamp by Uri</p>
        </div>
    </div>
    <p class="homeButton" onclick="toDownload()">SEE MORE</p>
    <!--Section that shows latest news about VGPerson-->
    <p class="borderText">LATEST FROM VGPERSON</p>
    <div class="section" id="homeNews">
        <div>
            <p class="newsTag">May 17th, 2022: Ib Remake</p>
            <p class="newsContent">A remade version of kouri's classic horror adventure game Ib, about a girl lost in a disturbing art gallery, now with my English translation.</p>
        </div>
        <div>
            <p class="newsTag">June 10th, 2021: Your Turn To Die (Chapter 3, Part One, Section B)</p>
            <p class="newsContent">A negotiation/horror/adventure game by Nankidai (not yet concluded), about people trapped in a cruel game where death is decided by majority vote. (The side-game, Your Time To Shine: Island Existence, was also updated with a new protagonist
                option on March 8th, 2022!)</p>
        </div>
    </div>
    <p class="homeButton" onclick="toNews()">READ MORE</p>
    <p class="tagline">fear shows true creativity</p>
    <script src="scripts/rpgjs.js" type="text/javascript"></script>
</body>

</html>

<?php
    unset($_SESSION["error"]);
?>