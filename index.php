<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clima e Tempo da Cidade</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/index.css">

</head>

<body class="body">

 
  <img class="imagem" src="img/imagem.png">
  
  <form action="acoes.php?acao=obter_tempo" method="post">
    <div>
      <input id="campo" name="campo" type="text" placeholder="Nome da cidade" class="consulta">
      <button type="submit" class="btn btn-secondary">Consultar</button>
    </div>
    <div id="resultado">
    </div>
  </form>
  <?php if(isset($_SESSION['message']) && $_SESSION['message']){ ?>
  <div class="d-flex align-items-center justify-content-center">
    <div class="col-2">
      <div class="alert alert-danger alerta" role="alert">
        <?php echo $_SESSION['message'];
        unset($_SESSION['message']); ?>
      </div>
    </div>
  </div>
  <?php } ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html>