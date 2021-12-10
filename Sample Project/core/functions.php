<?php
//common start

use function PHPSTORM_META\type;

function alert($data, $color='danger'){
        return "<p class='alert alert-$color'>$data</p>";
    }

    function run_query($sql){
        $connection = connection();
        if(mysqli_query($connection,$sql)){
            return true;
        }else{
            die('query fail!'.mysqli_error($connection));
        }
    }

    function fetch_all($sql){
        $query = mysqli_query(connection(),$sql);
        $rows = [];
        while($row = mysqli_fetch_assoc($query)){
            array_push($rows,$row);
        }
        return $rows;
    }

    function fetch_one($sql){
        $query = mysqli_query(connection(),$sql);
        $row = mysqli_fetch_assoc($query);
        return $row;
    }

    function redirect($location){
        header("Location: $location");
    }

    function link_to($l){
        echo "<script>location.href='$l'</script>";
    }

    function show_time($time_stamp,$format="d-m-y"){
        return date($format,strtotime($time_stamp));                             //time_stamp function format
    }

    function count_total($table){
        $sql = "SELECT COUNT(id) AS total FROM $table";
        return fetch_one($sql)['total'];
    }

    function short_text($string, $length="50"){
        return substr($string,0,$length)."....";                                  //substr will shorten the string 
    }

    function text_filter($text){
        $text = trim($text);
        $text = htmlentities($text,ENT_QUOTES);                                    // text trim, remove entities and back slash to send text to db                          
        $text = stripslashes($text);
        return $text;
    }

//common end


// auth start 

    function register(){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if($password == $confirm_password){
            $secure_password = password_hash($password,PASSWORD_DEFAULT);                                               //password secure

            $sql = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$secure_password')";
            if( run_query($sql)){
                redirect('login.php');
            }
        }else{
            alert("password not match!");
        }
    }


    function login(){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $query = mysqli_query(connection(), $sql);
        $row = mysqli_fetch_assoc($query);
      
        if (!$row) {
            return alert('email or password not match!');
        } else {
            if (!password_verify($password, $row['password'])) {
                return alert("Wrong email or password!");
            } else {
                
                session_start();
                $_SESSION['user'] = $row;
                return redirect('dashboard.php');
                
            }
        }
    }

// auth end 


//user start

    function user($id){
        
        $sql = "SELECT * FROM users WHERE id=$id";
        return fetch_one($sql);
    }

    function users(){

        $sql = "SELECT * FROM users";
        return fetch_all($sql);
    }


//user end


//category start

    function category_add(){

        $title = $_POST['title'];
        $user_id = $_SESSION['user']['id'];                                                 //taking data from session
        $sql = "INSERT INTO category(title,user_id) VALUES ('$title','$user_id') ";
        if(run_query($sql)){
            link_to('category_add.php');
        }

    }

    function category($id){

        $sql = "SELECT * FROM category WHERE id=$id";
        return fetch_one($sql);
        
    }

    function categories(){

        $sql = "SELECT * FROM category";
        return fetch_all($sql);
    }


    function category_delete($id){
        $sql = "DELETE FROM category WHERE id=$id";
        return run_query($sql);

    }

    function category_update(){
        $user_id = $_POST['id'];
        $title = $_POST['title'];
        $sql = "UPDATE category SET title = '$title' WHERE id = $user_id ";
        return run_query($sql);
    }

//category end


//post start


    function post_add(){

        $title = text_filter($_POST['title']);
        $description = text_filter($_POST['description']);                                     
        $category_id = $_POST['category_id'];
        $user_id = $_SESSION['user']['id'];

        $sql = "INSERT INTO posts (title,description,category_id,user_id) VALUES ('$title','$description','$category_id','$user_id')";
   
        if(run_query($sql)){
            link_to('post_add.php');
        }
}
    function post($id){

        $sql = "SELECT * FROM posts WHERE id=$id";
        return fetch_one($sql);
        
    }

    function posts(){
        
        if($_SESSION['user']['role'] == 2){
            $current_user_id = $_SESSION['user']['id'];
            $sql = "SELECT * FROM posts WHERE user_id = '$current_user_id'";
        }else{
            $sql = "SELECT * FROM posts";
        }
  
        return fetch_all($sql);
    }

    function post_delete($id){
        $sql = "DELETE FROM posts WHERE id=$id";
        return run_query($sql);
    }

    function post_update(){
        $title = $_POST['title'];
        $description = $_POST['description'];                                     
        $category_id = $_POST['category_id'];
        $post_id = $_POST['id'];

        $sql = "UPDATE posts SET title='$title', description='$description', category_id='$category_id' WHERE id = $post_id ";
        return run_query($sql);
    }



//post end
