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

    function count_total($table,$condition=1){
        $sql = "SELECT COUNT(id) FROM $table WHERE $condition";
        $total = fetch_one($sql);
        return $total['COUNT(id)'];
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

        $sql = "SELECT * FROM category ORDER BY ordering DESC";
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

    function category_pin_to_top($id){                                                      //pin to category

        $sql = "UPDATE category SET ordering= '0'";
        mysqli_query(connection(),$sql);

        $sql = "UPDATE category SET ordering = '1' WHERE id = $id ";
        return run_query($sql);
    }

    function category_remove_pin(){                                                          //remove pin

        $sql = "UPDATE category SET ordering= '0'";
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

    function posts($limit = 99999){
        
        if($_SESSION['user']['role'] == 2){
            $current_user_id = $_SESSION['user']['id'];
            $sql = "SELECT * FROM posts WHERE user_id = '$current_user_id' LIMIT $limit";
        }else{
            $sql = "SELECT * FROM posts LIMIT $limit";
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

//front panel start

    function panel_posts($order_column = "id", $order_type = "DESC"){
        
       $sql = "SELECT * FROM posts ORDER BY $order_column $order_type";
       return fetch_all($sql);
    
    }

    
    function panel_categories(){

        $sql = "SELECT * FROM category ORDER BY ordering DESC";
        return fetch_all($sql);
    }


    function post_by_category($category_id, $limit="99999",$post_id=0){

        $sql = "SELECT * FROM posts WHERE category_id = $category_id AND id != $post_id ORDER BY id DESC LIMIT $limit";
        return fetch_all($sql);   

    }

    function search_key ($key){
        
        $sql = "SELECT * FROM posts WHERE title LIKE '%$key%' OR description LIKE '%$key%' ORDER BY id DESC";       //checking search key exits in title or description
        return fetch_all($sql);
    }

    function search_by_date ($start,$end){
        
        $sql = "SELECT * FROM posts WHERE created_at BETWEEN '$start' AND '$end' ORDER BY id DESC";                  //filtering posts by date 
        return fetch_all($sql);
    }
//front panel end


//viewer count start

    function viewer_record($user_id,$post_id,$device){

        $sql = "INSERT INTO viewers (user_id,post_id,device) VALUES ('$user_id','$post_id','$device')";
        run_query($sql);
    }

    function viewer_count_by_post($post_id){
        $sql = "SELECT * FROM viewers WHERE post_id = '$post_id'";
        return fetch_all($sql);
    }
    
    function viewer_count_by_user($user_id){
        $sql = "SELECT * FROM viewers WHERE user_id = $user_id";
        return fetch_all($sql);
    }

//viewer count end\



//ads start

    function ads(){
        $today = date("Y-m-d");
        $sql = "SELECT * FROM ads WHERE start <= '$today' AND end >= '$today'";
        return fetch_all($sql);      
    }

//ads end


//payment start

    function paynow(){

        $to_user = $_POST['to_user'];
        $from_user = $_SESSION['user']['id'];
        $amount = $_POST['amount'];
        $description = $_POST['description'];
        
        //from user money update
        $from_user_detail = user($from_user);
        if($from_user_detail['money'] >= $amount){
            
            $left_money = $from_user_detail['money'] - $amount;
            $sql = "UPDATE users SET money = '$left_money' WHERE id = $from_user";
            mysqli_query(connection(),$sql);
    
            //to user money update
            $to_user_detail = user($to_user);
            $new_money = $to_user_detail['money'] + $amount;
            $sql = "UPDATE users SET money = '$new_money' WHERE id = $to_user";
            mysqli_query(connection(),$sql);
    
            //add to transition table
            $sql = "INSERT INTO transition(from_user,to_user,amount,description) VALUES ('$from_user','$to_user','$amount','$description')";
            run_query($sql);
        }

    }

    function transition($id){

        $sql = "SELECT * FROM transition WHERE id=$id";
        return fetch_one($sql);
        
    }

    function transitions(){
        $userId = $_SESSION['user']['id'];
        if ($_SESSION['user']['role'] == 0) {
            $sql = "SELECT * FROM transition";
        }else{
            $sql = "SELECT * FROM transition WHERE from_user=$userId OR to_user=$userId";             //checking admin or user to see transition
        }
        return fetch_all($sql);
    }


//payment end


//admin dashboard start

    function dashboard_posts($limit = 99999){
        
        if($_SESSION['user']['role'] == 2){
            $current_user_id = $_SESSION['user']['id'];
            $sql = "SELECT * FROM posts WHERE user_id = '$current_user_id' ORDER BY id DESC LIMIT $limit";
        }else{
            $sql = "SELECT * FROM posts LIMIT $limit";
        }

        return fetch_all($sql);
    }


//admin dashbard end