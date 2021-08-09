<?php

session_start();
$tempo = $_SESSION['tempo'];



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clima e Tempo</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <link href="fa/css/all.css" rel="stylesheet">
  <!--load all styles -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>




<body class="body container">
  <div class="row">
    <div class="col-4 offset-4 d-flex align-items-center justify-content-center">
      <div class="card text-dark bg-light mb-4 mt-4">
        <div class="card-header">
          <div class="nome"> <?php echo $tempo->name; ?></div>
        </div>
        <div class="card-body">
          <div class="temperatura"><?php echo number_format($tempo->main->temp) . "°" ?>
            <img src="http://openweathermap.org/img/wn/<?php echo $tempo->weather[0]->icon ?>@2x.png">
          </div>

        </div>
      </div>
    </div>

  </div>


  <div class="row">
    <div class="col-8 offset-2 d-flex align-items-center justify-content-center">
      <div class="card text-dark bg-light mb-3 cartao">
        <!---- <div class="card-header">Header</div> -->
        <div class="card-body">
          <div class="icon">
            <div class="estado"><?php echo ucfirst($tempo->weather[0]->description); ?></div>

          </div>

          <div class="informacoes">
            <div class="infoCard">
              <i class="fas fa-wind infoIcon vento"></i>
              <div class="unidade"><?php echo $tempo->wind->speed . "KM/h" ?></div>
            </div>
            <div class="infoCard">
              <i class="fas fa-tint infoIcon gota"></i>
              <div class="unidade"><?php echo  $tempo->main->humidity . "%" ?> </div>
            </div>
          </div>
          <div class="lonlat">
            <div class="card-footer">
              <div class="lonlat"> 
                <?php echo "Longitude: " . $tempo->coord->lon; ?>
                <?php echo "Latitude: " . $tempo->coord->lat; ?>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

<div class="row">
  <div class="col-6 offset-3 d-flex align-items-center justify-content-center">
    <a href="index.php" class="btn btn-secondary">Nova Consulta</a>
  </div>
</div>

</html>