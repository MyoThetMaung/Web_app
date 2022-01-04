<?php

    require "base.php";
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO contact (name,phone) VALUES ('$name','$phone')";
    $query = mysqli_query(connection(),$sql);
    if($query){
        echo "success";
    }