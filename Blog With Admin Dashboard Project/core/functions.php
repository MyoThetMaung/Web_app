<?php

    function category_list(){

        global $connection;
        $sql = "SELECT * FROM to_do";
        $query = mysqli_query($connection, $sql);
        $rows = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($rows, $row);
        }
        return $rows;
    }

    function category_only_one_list($id){

        global $connection;
        $sql = "SELECT * FROM to_do WHERE id =$id";
        $query = mysqli_query($connection,$sql);
        $row  = mysqli_fetch_assoc($query);
        return $row;

    }

    function category_create(){

        global $connection;
        if(isset($_GET['addBtn'])){
            $message = $_GET['message'];
            $sql = "INSERT INTO to_do (message) VALUES ('$message')";
            $query = mysqli_query($connection, $sql);

            if($query){
                echo "<script>location.href='category_list.php'</script>";
            }else{
                die('Create Fail!');
            }
        }
    }

    function category_delete(){

        global $connection;
        $id = $_GET['id'];
        $sql = "DELETE FROM to_do WHERE id = $id";

        $query = mysqli_query($connection,$sql);
        if($query){
            echo "<script>location.href='category_list.php'</script>";
        }else{
            die('Delete Fail!');
        }
    }


    function category_update(){

        global $connection;

        $id  = $_GET['id'];
        $message = $_GET['message'];

        $sql = "UPDATE to_do SET message='$message' WHERE id = $id";
        $query = mysqli_query($connection,$sql);
        if($query){
            echo "<script>location.href='category_list.php'</script>";
        }
        else{
            echo "Update Fail!";
        }
    }
