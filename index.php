<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clima e Tempo da Cidade</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



  <style>
    .imagem {
      margin: 50px 10px;
      width: 225px;
      border-radius: 32%;
    }

    .body {
      background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStagONP0cQH0-0HC6yJ0YDy2xD0pnspdNDQA&usqp=CAU');
      background-position: center;
      background-size: cover;
      align-items: center;
      justify-items: center;
      text-align: center;
    }

    .button {
      margin-top: 10px;
      background-color: #008CBA;
      font-size: 18px;
      padding: 10px 24px;
    }

    .texto {
      margin-top: 50px;
      font-family: math;
      font-size: x-large;
      color: #4682B4	;
    }
  </style>
</head>


<body class="body">
  <div class="texto"><b>CLIMA E TEMPO DA SUA CIDADE</b></div>
  <img class="imagem" src="img/imagem.png">

  <form action="acoes.php?acao=obter_tempo" method="post">
    <div>
      <input id="campo" name="campo" type="text" placeholder="Cidade">
      <button type="submit" class="btn btn-outline-primary">Consultar</button>
    </div>
    <div id="resultado">
    </div>
  </form>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html>