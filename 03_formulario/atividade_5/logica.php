<?php
$nome = $_POST['nome'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];

//transformando altura que esta em metros
//para centimentos
$altura = $altura * 100;

$IMC = ($altura * $altura) / $peso;

require_once "view_relatorio.php";
?>
