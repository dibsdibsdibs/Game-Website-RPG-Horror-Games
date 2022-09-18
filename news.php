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
    <title>News</title>
    <link rel="icon" href="pics/icon.png">
    <link href="styles/newsDesign.css" type="text/css" rel="stylesheet" />
    <link href="styles/generalDesign.css" type="text/css" rel="stylesheet" />
</head>

<body class="bg">
    <!--Header bar section-->
    <header class="headerBar">
        <img src="pics/skull.png" class="icon">
        <h1>NEWS</h1>
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
    <!--Displays latest news-->
    <div id="news">
        <p class="borderText">Latest Original Games</p>
        <div class="section" id="orig">
            <p class="namedate">August 12th, 2017: All To Get Her</p>
            <p class="newstext">The latest game by me, vgperson! A co-op (or single-player) puzzle-platformer about two girls, a dungeon, and their quest for the ultimate reward. (Now downloadable for free as of its third anniversary!)</p>
        </div>
        <p class="borderText">Latest Game Translations</p>
        <div class="section" id="trans">
            <div>
                <p class="namedate">May 17th, 2022: Ib Remake</p>
                <p class="newstext">A remade version of kouri's classic horror adventure game Ib, about a girl lost in a disturbing art gallery, now with my English translation.</p>
            </div>
            <div>
                <p class="namedate">June 10th, 2021: Your Turn To Die (Chapter 3, Part One, Section B)</p>
                <p class="newstext">A negotiation/horror/adventure game by Nankidai (not yet concluded), about people trapped in a cruel game where death is decided by majority vote. (The side-game, Your Time To Shine: Island Existence, was also updated with a new protagonist
                    option on March 8th, 2022!)</p>
            </div>
            <div>
                <p class="namedate">October 29th, 2020: The Case Book of Arne (Case 1)</p>
                <p class="newstext">A Steam release of a mystery-adventure series by Haru Murasaki. As noble girl Lynn Reinweiß, plunge into the world of the supernatural and work with the vampire detective Arne to solve a mystery!</p>
            </div>
        </div>
        <p class="borderText">Latest Other Things</p>
        <div class="section" id="things">
            <div>
                <p class="namedate">January 25th, 2020: REM-9: The Yume Nikki Randomizer</p>
                <p class="newstext">A randomizer I made for Kikiyama's RPG Maker classic Yume Nikki. Shuffle Effects, randomize warps across the dream world, and more!</p>
            </div>
            <div>
                <p class="namedate">December 31st, 2019: The Witch's House: The Diary of Ellen</p>
                <p class="newstext">A novel by Fummy written as a prequel to their RPG horror game The Witch's House. Now officially available on Kindle in English!</p>
            </div>
            <div>
                <p class="namedate">August 14th, 2018: Your Story</p>
                <p class="newstext">Sugaru Miaki (Fafoo)'s latest novel, about fictional memories of a childhood friend, and a love that was over before it began.</p>
            </div>
        </div>
    </div>
    <p class="tagline">fear shows true creativity</p>
    <script src="scripts/rpgjs.js" type="text/javascript"></script>
</body>

</html>