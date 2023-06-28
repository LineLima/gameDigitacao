<?php
    $server = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "usuarios_game";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["senha"])) {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            try {
                $conexao = new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha);
                $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $query = $conexao->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
                $query->execute([$nome, $email, $senha]);

                header("Location: login.html");
                exit();
            } catch (PDOException $erro) {
                echo "Ocorreu um erro de conexão: " . $erro->getMessage();
            } finally {
                $conexao = null;
            }
        } else {
            echo "Por favor, preencha todos os campos.";
        }
    }
?>
