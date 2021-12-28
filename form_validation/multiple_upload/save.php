<?php
   

    $file_name = $_FILES['upload']['name'];
    $tmp_name = $_FILES['upload']['tmp_name'];


    foreach ($tmp_name as $key => $value) {
        move_uploaded_file($value,"store/".uniqid().$file_name[$key]);
    }

    