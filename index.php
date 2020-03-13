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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Car website</title>
  <link rel = "stylesheet" type = "text/css" href = "stylesheet.css"> 
</head>
<body>
  <div class = "menu-wrapper container">
    <h1 class = "logo">Car Sports</h1>
    <div class = "menu-items">
      
    </div>
  </div>
  
</body>
</html>




