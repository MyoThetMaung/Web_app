<?php

    require_once "template/header.php";

    $id = $_GET['id'];
    $sql = "DELETE FROM to_do WHERE id = $id";

    $query = mysqli_query($connection,$sql);
    if(!$query){
        echo 'delete failed!';
    }else{
        echo "<script>location.href='category_list.php'</script>";
    }