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
    <title>Collection</title>
    <link rel="icon" href="pics/icon.png">
    <link href="styles/collectDesign.css" type="text/css" rel="stylesheet" />
    <link href="styles/generalDesign.css" type="text/css" rel="stylesheet" />
</head>

<body class="bg">
    <!--Header bar section-->
    <header class="headerBar">
        <img src="pics/skull.png" class="icon">
        <h1>COLLECTION</h1>
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
    <!--List of Games-->
    <div class="promo">
        <img src="pics/madfather.png">
        <div>
            <p id="promoTitle">Mad Father</p>
            <p id="promoText">by Miscreant's Room (Sen)</p>
            <button type="submit" class="dl" name="3" id="game3" onclick="toRetrieve(event)">DOWNLOAD HERE</button>
        </div>
    </div>
    <p class="borderText">THE STRANGE MEN ANTHOLOGY BY URI</p>
    <div class="gameCollection">
        <div>
            <img src="pics/crookedman.jpg" class="game">
            <br><button type="submit" class="dl" name="5" onclick="toRetrieve(event)">The Crooked Man</button>
        </div>
        <div>
            <img src="pics/sandman.jpg" class="game">
            <br><button type="submit" class="dl" name="10" onclick="toRetrieve(event)">The Sandman</button>
        </div>
        <div>
            <img src="pics/boogieman.jpg" class="game">
            <br><button type="submit" class="dl" name="13" onclick="toRetrieve(event)">The Boogie Man</button>
        </div>
        <div>
            <img src="pics/hangedman.jpg" class="game">
            <br><button type="submit" class="dl" name="14" onclick="toRetrieve(event)">The Hanged Man</button>
        </div>
    </div>
    <p class="borderText">OTHER WORKS BY URI</p>
    <div class="gameCollection">
        <div>
            <img src="pics/insanity.png" class="game">
            <br><button type="submit" class="dl" name="7" onclick="toRetrieve(event)">Insanity</button>
        </div>
        <div>
            <img src="pics/paranoiac.jpg" class="game">
            <br><button type="submit" class="dl" name="6" onclick="toRetrieve(event)">Paranoiac</button>
        </div>
        <div>
            <img src="pics/mermaidswamp.png" class="game">
            <br><button type="submit" class="dl" name="9" onclick="toRetrieve(event)">Mermaid Swamp</button>
        </div>
    </div>
    <p class="borderText">WORKS BY TERIYAKI TOMATO (KANAWO)</p>
    <div class="gameCollection">
        <div>
            <img src="pics/blankdream.png" class="game">
            <br><button type="submit" class="dl" name="12" onclick="toRetrieve(event)">Blank Dream</button>
        </div>
        <div>
            <img src="pics/blightdream.png" class="game">
            <br><button type="submit" class="dl" name="11" onclick="toRetrieve(event)">Blight Dream</button>
        </div>
    </div>
    <p class="borderText">OTHER GAMES</p>
    <div class="gameCollection">
        <div>
            <img src="pics/ib.jpg" class="game">
            <br><button type="submit" class="dl" name="1" onclick="toRetrieve(event)">Ib<br>by kouri</button>
        </div>
        <div>
            <img src="pics/misao.jpg" class="game">
            <br><button type="submit" class="dl" name="4" onclick="toRetrieve(event)">Misao<br>by Miscreant's Room (Sen)</button>
        </div>
        <div>
            <img src="pics/rekinder.jpg" class="game">
            <br><button type="submit" class="dl" name="8" onclick="toRetrieve(event)">Re:Kinder<br>by Parun</button>
        </div>
        <div>
            <img src="pics/witchhouse.jpg" class="game">
            <br><button type="submit" class="dl" name="2" onclick="toRetrieve(event)">The Witch's House<br>by Fummy</button>
        </div>
    </div>
    <p class="tagline">fear shows true creativity</p>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="scripts/rpgjs.js" type="text/javascript"></script>

</body>

</html>