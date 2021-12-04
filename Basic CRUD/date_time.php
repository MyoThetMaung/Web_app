<?php


    echo date("d-m-Y")."<br>";
    echo date("D-M-y")."<br>";
    echo date("d-m-Y h:i:s")."<br>";

    //adding days or months or years from now
    $date = date_create(date("d-m-Y"));
    $date_update = date_add($date,date_interval_create_from_date_string("24 days"));
    echo date_format($date_update,"d-m-Y")."<br>";

    //calculating days in month
    echo cal_days_in_month(CAL_GREGORIAN,date('m'),date('Y'));