<?php 
    require_once "connection.php";

    if(isset($_GET['send'])){

        $message = $_GET['message'];
        $sql = "INSERT INTO to_do (message) VALUES ('$message')";
        $query = mysqli_query($connection, $sql);
        if($query){
            echo "connection success";
        }else{
            echo "connection fail";
        }
    }


?>
    <?php include "nav.php"; ?>
    <form action="" method="get">
        <input type="text" name="message" required>
        <button name="send">Send</button>
    </form>