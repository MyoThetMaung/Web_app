<?php 

    require_once "core/auth.php";
    require_once "core/base.php";
    require_once "core/functions.php";

    $id = $_GET['id'];
    if(category_delete($id)){
        link_to("category_add.php");
    }
