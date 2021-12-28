<?php

    class Magic{

    
        public function __construct($name)
        {
            echo "this is constructor $name";
        }

        
        public function run(){
            return 'i am running';
        }
        
        public function __destruct()
        {
            echo "this is destructor";
        }
    }

    $con = new Magic('saimon');
    echo $con -> run();
