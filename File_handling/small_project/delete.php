<?php

    unlink("store_file/".$_GET['name']);
    header("Location: index.php");

