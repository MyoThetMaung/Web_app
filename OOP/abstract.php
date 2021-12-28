<?php

    abstract class Testing{

        abstract public function testing();
    }

    class Son extends Testing{

        public function testing(){
            return "hello world";
        }
    }

   $obj = new Son;
   echo $obj -> testing();