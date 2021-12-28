<?php


    use One\Namespace\User;
    use Two\Namespace\User as Two;                           //can also write like that             

    include "One.php";
    include "Two.php";

    $obj = new User;
    echo $obj -> one();

    $obj2 =  new Two;
    echo $obj2 -> two();
