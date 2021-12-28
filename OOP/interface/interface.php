<?php

    interface Rules{
        
        public function play();
        public function stop();
        public function delete();
        public function next();
    }


    interface Storage{
        
        public function store();
    }