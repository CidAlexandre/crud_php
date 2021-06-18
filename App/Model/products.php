<?php

class Products{
    private $name;
    private $description;


    public function getName(){
        return $this->name;
    }
    public function getDescription(){
        return $this->description;
    }

    public function setName($n){
        $n = filter_var($n, FILTER_SANITIZE_SPECIAL_CHARS);
        $this->name = $n;
    }

    public function setDescription($d){
        $d = filter_var($d, FILTER_SANITIZE_SPECIAL_CHARS);
        $this->description = $d;
    }
}