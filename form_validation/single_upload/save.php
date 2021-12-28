<?php
    $temp_file = $_FILES['upload']['tmp_name'];
    $file_name = $_FILES['upload']['name'];
    $file_type = $_FILES['upload']['type'];

    $support_file_type = ['image/png','image/jpeg','image/jpg'];

    if($file_name){

        if(in_array($file_type,$support_file_type)){
            
            $file_move = move_uploaded_file($temp_file,"store/".uniqid()."_".$file_name);
            if($file_move){
                header("Location: index.php");
            }
        }else{
            echo "file type is not supported!";
        }
    }else{
        echo "file not selected";
    }