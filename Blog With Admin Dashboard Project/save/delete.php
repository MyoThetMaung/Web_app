<?php

    require_once "connection.php";

    $id = $_GET['id'];
    $sql = "DELETE FROM to_do WHERE id = $id";

    $query = mysqli_query($connection,$sql);
    if(!$query){
        echo 'delete failed!';
    }else{
        header("Location:read.php");
    }