<?php

    function set_error($input_name,$message){
        $_SESSION['error'][$input_name] = $message;
    }
    
    function get_error($input_name){
        if(isset($_SESSION['error'][$input_name])){
            return $_SESSION['error'][$input_name];
        }else{
            return "";
        }
    }
    
    function clear_error(){
        $_SESSION['error'] = [];
    }

    function old($input_name){

        if(isset($_POST["$input_name"])){
            return $_POST["$input_name"];
        }else{
            return "";
        }
    }


    function text_filter($text){
        $text = trim($text);
        $text = htmlentities($text);
        $text = stripslashes($text);
        return $text;
    }

    function register(){
        global $gender_arr;
        global $skill_arr;
        //for name
        if(empty($_POST['name'])){
            set_error('name','name is required');
        }elseif(strlen($_POST['name']) < 5){
            set_error('name','name is too short');
        }elseif(strlen($_POST['name']) >20){
            set_error('name', 'name is too long');
        }else{
            $name = $_POST['name'];
            echo text_filter($name).' | ';
        }

        //for email
        if(empty($_POST['email'])){
            set_error('email','email is required');
        }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            set_error('email','Invalid email format');
        }else{
            $email = $_POST['email'];
            echo text_filter($email).' | ';
        }

        //for phone
        if(empty($_POST['phone'])){
            set_error('phone','phone is required');
        }elseif(!preg_match("/^[0-9]*$/",$_POST['phone'])){
            set_error('phone','Invalid number format');
        }else{
            $phone = $_POST['phone'];
            echo text_filter($phone).' | ';
        }

        //for address
        if(empty($_POST['address'])){
            set_error('address','address is required');
        }else{
            $address = $_POST['address'];
            echo text_filter($address).' | ';
        }

         //for gender
         if(empty($_POST['gender'])){
            set_error('gender','gender is required');
        }elseif(!in_array($_POST['gender'],$gender_arr)){
            set_error('gender','gender not correct');
        }else{
            $gender = $_POST['gender'];
            echo text_filter($gender). '  |   ';
        }

        //for skill
        if(empty($_POST['skill'])){
            set_error('skill','skill is required');
        }else{
            $skill = $_POST['skill'];
            foreach($skill as $s){
                if(!in_array($s,$skill_arr)){
                    set_error('file','file not correct');
                }
                echo $s . ' ';
            }
        }

        //file 
        if(isset($_FILES['upload']['name'])){
            
            $support_file_type = ['image/png','image/jpeg','image/jpg'];

            $temp_file = $_FILES['upload']['tmp_name'];
            $file_name = $_FILES['upload']['name'];
            $file_type = $_FILES['upload']['type'];

            if(in_array($file_type,$support_file_type)){
                
                move_uploaded_file($temp_file,"store/".uniqid()."_".$file_name);
                
            }else{
                set_error('file','file not supported');
            }
        }else{
            set_error('file','file not selected');
        }
        print_r($_FILES);


    
    }

   
    

?>