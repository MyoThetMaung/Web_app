<?php

    $name = 'bicycle';

    // not secure 
    echo md5($name)."<br>";
    echo sha1($name)."<br>";
    echo crypt($name,'bicycle')."<br>";


    // secure
    $hash = password_hash($name,PASSWORD_DEFAULT);      //encrypt password
    echo password_verify($name,$hash);                  //checking password correct or not