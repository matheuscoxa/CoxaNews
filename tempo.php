<?php

session_start();
$tempo = $_SESSION['tempo'];



?>

<style>
  .body {
    background-image: url('https://i2.wp.com/wallpaperaccess.com/full/1250040.jpg ');
    background-position: center;
    background-size: cover;
    align-items: center;
    justify-items: center;
    background-color: lavender;

  }

  .nome {
    font-size: 52px;
    margin-left: 38%;
    margin-top: 10px;
  }

  .lonlat {
    margin-top: 30%;
    font-family: monospace;
  }

  .voltar {
    color: white;
    padding: 8px 11px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    border-radius: 7px;
    background-color: silver;
    color: black;
    border: 2px solid silver;
    
  }

  .vtr{
    margin: 7px 5px;
  }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>




<body class="body">
  <div><?php echo $tempo->sys->country; ?>
  </div>
  <div class="nome">
    <?php echo $tempo->name; ?>
  </div>

  <div>
    <div><?php echo $tempo->weather[0]->icon; ?></div>
    <div><?php echo $tempo->weather[0]->description; ?></div>
  </div>

  <div><?php echo "Velocidade do vento: " . ($tempo->wind->speed) . "KM/h" ?></div>

  <div>
    <div class="max"><?php echo " TEMP: " . number_format((($tempo->main->temp_max / 5) - 32) * 5 / 9) . "°" ?> </div>
    <div class="umidade"><?php echo "UMIDADE: " . $tempo->main->humidity ?> </div>
  </div>



  <div class="lonlat">
    <?php echo "Longitude: " . $tempo->coord->lon; ?>
    <?php echo "Latitude: " . $tempo->coord->lat; ?>
  </div>
  </div>
</body>

<footer>
 <div class="vtr"> <a href="index.php" class="voltar">Voltar</a></div>
</footer>

</html>