<?php

session_start();
$tempo = $_SESSION['tempo'];

?>
<style>
  .body {
    background-image: url('https://static.tumblr.com/63fb97f531ca3d7ec59e5a36b25cd978/tjpq0as/3Z6pi43ln/tumblr_static_-513610465-content_2048_v2.gif');
    background-position: center;
    background-size: cover;
    align-items: center;
    justify-items: center;
    background-color: lavender;

  }

  .nome {
    font-size: 70;
    margin-left: 38%;
    margin-top: 10px;
  }

  .lonlat {
    margin-top: 500px;
    font-family: monospace;
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
  <div class="lonlat">
    <?php echo "Longitude: " . $tempo->coord->lon; ?>
    <?php echo "Latitude: " . $tempo->coord->lat; ?>
  </div>
  </div>
</body>

</html>