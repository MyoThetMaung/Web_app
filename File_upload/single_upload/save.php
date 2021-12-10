<?php
    $temp_file = $_FILES['upload']['tmp_name'];
    $file_name = $_FILES['upload']['name'];

    $file_move = move_uploaded_file($temp_file,"store/".uniqid()."_".$file_name);
    if($file_move){
        header("Location: index.php");
    }