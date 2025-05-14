<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "trab tec";


$conn = new mysqli($host, $usuario, $senha, $banco);


if ($conn->connect_error) {
    die("Falhou meu parceiro". $conn->connect_error);
}
?>