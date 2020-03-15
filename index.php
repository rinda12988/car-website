<?php 
require_once('data.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Car website</title>
  <link rel = "stylesheet" type = "text/css" href = "stylesheet.css"> 
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
  <div class = "menu-wrapper container">
    <h1 class = "logo">Car Sports</h1>
    <div class = "menu-items">
      <?php foreach($cars as $car): ?>

        <img src ="<?php echo $car->image ?>" style = "max-width:100%; height:auto;" >

        <h3><?php echo $car->name ?></h3>

        <p class = "price">CAD <?php echo $car->getTaxIncludedPrice() ?> (tax include)</p>

      <?php endforeach ?>
    </div>
  </div>
  
</body>
</html>




