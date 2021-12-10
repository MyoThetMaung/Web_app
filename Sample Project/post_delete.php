<?php 

    require_once "core/auth.php";
    require_once "core/base.php";
    require_once "core/functions.php";

    $id = $_GET['id'];
    if(post_delete($id)){
        link_to("post_list.php");
    }
