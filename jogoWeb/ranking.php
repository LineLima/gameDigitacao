<?php
$ranking = file_get_contents("pontuacoes.txt");

if (!empty($ranking)) {
    $usuarios = explode("\n", $ranking);
    arsort($usuarios);
} else {
    $usuarios = [];
}
?>
