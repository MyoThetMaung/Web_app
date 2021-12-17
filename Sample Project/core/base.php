<?php


//Connection creation   
    function connection(){

      return mysqli_connect("localhost","root","","blog");

    }

    
$info = array(
  "name" => "Sample Blog",
  "short" => "SB",
  "description" => "Sample Project For Students",
);

$role = ['Admin','Editor','User'];

$url = "http://{$_SERVER['HTTP_HOST']}/web_app/Sample Project";

date_default_timezone_set("Asia/Yangon");

