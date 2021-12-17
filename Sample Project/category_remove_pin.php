<?php 

    require_once "core/auth.php";
    require_once "core/base.php";
    require_once "core/functions.php";



    if(category_remove_pin()){

        link_to("category_add.php");
        
    }
