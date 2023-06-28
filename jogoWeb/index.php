<?php
  session_start();

  if (isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
    $nome = $_SESSION["usuario"][0];
  } else {
    echo "<script>window.location = 'login.php'</script>";
  }
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>game digitação</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div id="container">
    <h1>Digitation Game</h1>
    <p>Digite a palavra a seguir: </p>
    <div id="displayPalavra"></div>

    <input type="text" id="campoInput" placeholder="Digite aqui">
    <button id="restart-button">Reiniciar</button>

    <p id="pontuacaoAtual"></p>
  </div>

  <a href="logout.php">Sair</a>
  <script src="script.js"></script>
</body>
</html>
