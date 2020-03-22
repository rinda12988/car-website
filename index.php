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
    <form action = "conform.php" method = "post">
    <div class = "menu-items">
      <?php foreach($cars as $car): ?>
        <div class = "menu-item">

         <img src ="<?php echo $car->getImage() ?>" style = "max-width:50%; height:auto;" >

         <h3><?php echo $car->getName() ?></h3>

         <p class = "price">CAD$<?php echo $car->getTaxIncludedPrice() ?> (Tax include)</p>

         <input type = "text" value = "0" name = "<?php echo $car->getName() ?>">

        </div>
      <?php endforeach ?>
    </div>
    <input type = "submit" value = "SUBMIT">
    </form>
  </div>
  
</body>
</html>




