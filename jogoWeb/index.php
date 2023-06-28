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
  <meta charset = "utf-8">
  <title>game digitação</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>titulo</h1>
  
  <div id="displayPalavra">
    <!-- onde a palavra sera exibida -->
  </div>
  
  <input type="text" id="campoInput" placeholder="Digite aqui">
  <button id="restart-button">Reiniciar</button>
  
  <script src="script.js"></script>
  <a href="logout.php">Sair</a>
</body>
</html>
