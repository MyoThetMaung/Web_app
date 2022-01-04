<?php

    header("Content-type: application/json; charset = UTF-8");                  //change format to json
    header('Access-Control-Allow-Origin: *');                                   //allow access to all file can call                          

    require "../core/base.php";
    require "../core/functions.php";

    //.htaccess file make not to put extension like '.php' in browser

    $sql = "SELECT * FROM posts WHERE 1";

    if (isset($_GET['id'])){
        $id = text_filter($_GET['id']);        
        $sql .= " AND id = $id";
    }

    if(isset($_GET['limit'])){
        $limit = text_filter($_GET['limit']);
        $sql .= " LIMIT $limit";
    }
    
    if(isset($_GET['offset'])){
        $offset = text_filter($_GET['offset']);
        $sql .= " OFFSET $offset";
    }


    $rows = [];                                         
    $query = mysqli_query(connection(), $sql);
    while($row = mysqli_fetch_assoc($query)){
        $arr =[                                                                                   //customize fetching data 
            'id' => $row['id'],
            'title' => $row['title'],
            'description' => $row['description']
        ];
        array_push($rows, $arr);
    }


    api_output($rows);  