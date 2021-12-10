<?php
    $file = fopen("one.txt","w");

    $content = file_get_contents("https://forex.cbm.gov.mm/api/latest");
    fwrite($file,$content);
    fclose($file);