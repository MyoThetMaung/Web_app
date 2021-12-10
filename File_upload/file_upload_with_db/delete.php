<?php

    $connection = mysqli_connect("localhost","root","","my_list");
    $id = $_GET['id'];
    $sql = "DELETE FROM photos WHERE id=$id";
    $query = mysqli_query($connection,$sql);


    header("Location: index.php");