<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clima e Tempo da Cidade</title>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <style>
    .imagem {
      margin: 50px 10px;
      width: 225px;
      border-radius: 100%;
    }

    .body {
      text-align: center;
      background-color: lavender;
    }

    .button {
      margin-top: 10px;
      background-color: #008CBA;
      font-size: 18px;
      padding: 10px 24px;



    }

    .texto {
      margin-top: 50px;
    }
  </style>
</head>


<body class="body">
  <div class="texto"><b>CLIMA E TEMPO DA SUA CIDADE</b></div>
  <img class="imagem" src="img/imagem.jpg">
  <div></div>
  <form action="acoes.php?acao=obter_tempo" method="post">
    <div>
      <input id="campo" name="campo" type="text" placeholder="Cidade">
      <button class="w3-button w3-black">Consultar</button>
    </div>
    <div id="resultado">
    </div>
