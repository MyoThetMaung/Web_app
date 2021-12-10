<?php 
    require_once "connection.php";

    $sql = "SELECT * FROM to_do";
    $query = mysqli_query($connection,$sql);

    include "nav.php";
    while( $row = mysqli_fetch_assoc($query)){
        echo $row['id']." --- ".$row['message']. "<a href='delete.php?id=".$row['id']."'>Delete</a>  " ."<a href='update.php?id=".$row['id']."'>Update</a><br><br>";
    }
