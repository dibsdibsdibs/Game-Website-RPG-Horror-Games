<?php
    include 'dbconnector.php';
    
    session_start();
    $_SESSION['id'] = $_POST['id'];
    $id = $_SESSION['id'];

    $result = $conn -> query("SELECT title, creator, summary, profile, link FROM games WHERE game_id = '$id'");

    while ($row = $result -> fetch_assoc()) 
    {
        $_SESSION['title'] = $row['title'];
        $_SESSION['creator'] = $row['creator'];
        $_SESSION['summary'] = $row['summary'];
        $_SESSION['profile'] = $row['profile'];
        $_SESSION['link'] = $row['link'];
    }

    header("Location: download.php");
?>