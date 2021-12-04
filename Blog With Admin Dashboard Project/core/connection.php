<?php

    //Connection creation
    $connection = mysqli_connect("localhost","root","","project_two");

    if(!$connection){
        die('connection failed!'.mysqli_connect_errno());
    }
