<?php
include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = $_POST["register-text"];
    $password = $_POST["register-password"];
    $repassword = $_POST["register-repassword"];
    $insertDados = "INSERT INTO users(login, senha, resenha) VALUES ('$user', '$password', '$repassword')";
    $mysqli->query($insertDados);
}

$url = "cadastro.php";

header('Location: '.$url);

$mysqli->close();
?>