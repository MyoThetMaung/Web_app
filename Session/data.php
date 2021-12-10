<?php

    session_start();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    
    if($_SESSION['username']){

        echo "your username is ",$_SESSION['username']." and password is". $_SESSION['password'];
        echo "<a href='clear.php'>Delete</a>";
    }else{
        header("Location: index.php");
    }
