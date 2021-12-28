<?php

    class Sta{

        public static $a = 24;
        public static function ss(){
            return 'hello ss'. self::$a;                                 //self or static can use
        }
    }


    echo Sta::$a;
    echo Sta::ss();