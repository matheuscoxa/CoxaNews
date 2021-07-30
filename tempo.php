<?php

session_start();
$tempo = $_SESSION['tempo'];

?>
<style>
  .thead {
    background-color: darkGray;
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    color: black;
  }

  .table {
    width: auto;
    border: 1px solid black;
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
    margin-bottom: 30px;
    font-family: Arial, Helvetica, sans-serif;

  }

  .body {
    align-items: center;
    justify-items: center;
    background-color: lavender;
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
  <table class="table">
    <thead class="thead">
      <tr>
        <td>Nome</td>
        <td>País</td>
        <td>Longetude</td>
        <td>Latitude</td>
        <td>Velocidade do</td>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $tempo->name; ?></td>
        <td><?php echo $tempo->sys->country; ?></td>
        <td><?php echo $tempo->coord->lon; ?></td>
        <td><?php echo $tempo->coord->lat; ?></td>
       

      </tr>
    </tbody>
  </table>
</body>

</html>
        
