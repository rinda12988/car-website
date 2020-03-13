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

$toyota86 = new Menu('TOYOTA86');

$lexusLc500 = new Menu('LEXUSLC500');


// echo $toyota86->name;

// echo $lexusLc500->name;


echo $toyota86->hello();
echo '<br>';
echo $lexusLc500->hello();


?>


