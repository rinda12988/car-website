<?php 
require_once('menu.php');


$toyota86 = new Menu('TOYOTA86',30150,"images/toyota86.jpg");
$lexusLc500 = new Menu('LEXUSLC500',103050,"images/lexus-lc-500.jpg");
$audi = new Menu('AUDI',64300,"images/audi.jpg");
$impreza = new Menu('IMPREZA',31670,"images/impreza.jpg");

$toyota86->setOrderCount(2);

$cars = array($toyota86,$lexusLc500,$audi,$impreza);





?>