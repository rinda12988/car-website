<?php 

class Menu{
  public $name;

  public function hello(){
    echo 'Im '.$this->name;
  }
}

$toyota86 = new Menu();

$lexusLc500 = new Menu();


$toyota86->name = 'toyota86';

$lexusLc500->name = 'lexusLc500';


echo $toyota86->hello();
echo '<br>';
echo $lexusLc500->hello();


?>


