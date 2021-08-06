<?php

session_start();
$tempo = $_SESSION['tempo'];



?>

<style>
  .body {
    background-color: #70bfff80;
    background-position: center;
    background-size: cover;
    align-items: center;
    justify-items: center;

  }

  .nome {
    font-size: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .lonlat {
    margin-top: 10%;
    font-family: monospace;
    display: flex;
    align-items: center;
    justify-content: center;
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

  .vtr {
    margin: 22px 14px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .icon {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .temperatura {
    margin-bottom: 20px;
    margin-top: 20px;
    font-size: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .estado {
    font-size: 32;
    font-family: system-ui;
    margin-right: 100px;
  }

  .velumi {
    font-size: 32;
    font-family: system-ui;
    margin-right: 100px;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
  }



  .drop {
    background-color: #0288d1;
    height: 50px;
    width: 50px;
    border-radius: 0% 50% 50% 50%;
    transform: rotate(45deg);
    box-shadow: inset 0px 10px 10px -7px #03a9f4
  }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clima e Tempo</title>
</head>




<body class="body">
  <div><?php echo $tempo->sys->country; ?>
  </div>
  <div class="nome">
    <?php echo $tempo->name; ?>
  </div>
  <div class="temperatura"><?php echo number_format($tempo->main->temp) . "°" ?> </div>


  <div>

    <div class="icon">
      <div class="estado"><?php echo ucfirst($tempo->weather[0]->description); ?></div>
      <img src="http://openweathermap.org/img/wn/<?php echo $tempo->weather[0]->icon ?>@4x.png">
    </div>


    <div class="velumi">
      <div><?php echo "Vento: " . $tempo->wind->speed . "KM/h" ?></div>
      <div>
        <div>
        <div class="drop">
          <!-- GOTA CSS -->
        </div>
        <div class="umidade"><?php echo  $tempo->main->humidity . "%" ?> </div>
        </div>
      </div>
    </div>
    <div class="lonlat">
      <?php echo "Longitude: " . $tempo->coord->lon; ?>
      <?php echo "Latitude: " . $tempo->coord->lat; ?>
    </div>
  </div>
</body>

<footer>
  <div class="vtr"> <a href="index.php" class="voltar">Nova Consulta</a></div>
</footer>

</html>