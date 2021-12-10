<?php
    
    $connection = mysqli_connect("localhost","root","","my_list");

    $file_name = $_FILES['upload']['name'];
    $tmp_name = $_FILES['upload']['tmp_name'];


    foreach ($tmp_name as $key => $value) {
        $photo_link = "store/".uniqid().$file_name[$key];
        move_uploaded_file($value,$photo_link);

        $sql = "INSERT INTO photos (photo_link) VALUES ('$photo_link')";
        mysqli_query($connection,$sql);

    }
    header("Location: index.php");

    