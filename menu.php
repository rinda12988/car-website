<?php 

class Menu{
    public $name;
  
    public function __construct($name){
      $this->name = $name;
    }
  
    public function hello(){
      echo 'I\'m '.$this->name;
    }
  }

?>