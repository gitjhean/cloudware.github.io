<?php

$host = "127.0.0.1";
$usuario = "root";
$senha = "";
$database = "cloudware";

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->connect_error){
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

?>