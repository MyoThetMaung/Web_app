<?php

    class Myself{

        public $name = 'saimon';
        protected $age  = 24;
        private $uni = 'wyu';


        function myname(){
            return $this->uni;
        }

        function age(){
            return "my name is ". $this->myname() ." and my age is $this->age";
        }

    }

    $obj =  new Myself();
    echo $obj -> myname();
