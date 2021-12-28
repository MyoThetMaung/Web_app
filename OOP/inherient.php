<?php

    class Saimon{
        public $name = "saimon";
        protected $age = 24;
        private $uni = 'wyu';

        public function name (){
            return "my name is $this->name". $this->teach(). $this->dating();
        }

        protected function teach(){
            return "i teach programming";
        }
        
        private function dating(){
            return "i am now dating with Lisa";
        }
    }


    class Son extends Saimon{

        function son(){
            return $this->teach();
        }
    }


    
    $obj = new Saimon();
    echo $obj -> name()."<br>";

    $son = new Son();
    echo $son -> son();