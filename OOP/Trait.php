<?php

    trait One{

        var $a = 1;
    }

    trait Two{
        
        var $b = 2;
    }
    class First{
        
        public function first(){
            return "this is first";
        }
    }

    class Second extends First{
        
        use One, Two;
        public function second(){
            return "this is second \ ". $this->first();
        }
        
    }


    $trait = new Second();
    echo $trait -> second();
    echo $trait -> a;
    echo $trait -> b;