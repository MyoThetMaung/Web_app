<?php 
    header("Content-Type: application/json, charset: UTF-8");
    require_once "../core/base.php";
    require_once "../core/functions.php"; 

    //from data from db as api
    $sql = "SELECT * FROM posts WHERE 1";
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql .= " AND id = $id";   
    }

    if(isset($_GET['limit'])){
        $limit = $_GET['limit'];
        $sql .= " LIMIT $limit";   
    }

    if(isset($_GET['offset'])){
        $offset = $_GET['offset'];
        $sql .= " OFFSET $offset";   
    }


    $rows = [];
    $query = mysqli_query(connection(), $sql);
    while($row = mysqli_fetch_assoc($query)){
        $arr = [
            "id" => $row['id'],
            "title" => $row['title'],
            "description" => $row['description'],
            "category_name" => category($row['category_id'])['title']
        ];
        array_push($rows, $arr);
    }
    api_output($rows);


?>