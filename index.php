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


?>

<p><?php echo $toyota86->name; ?></p>
<p><?php echo $lexusLc500->name; ?></p>




