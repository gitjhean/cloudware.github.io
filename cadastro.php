<?php
include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = $_POST["register-text"];
    $password = $_POST["register-password"];
    $repassword = $_POST["register-repassword"];
    $insertDados = "INSERT INTO users(login, senha, resenha) VALUES ('$user', '$password', '$repassword')";
    $connection->query($insertDados);
}

$url = "index.html";

header('Location: '.$url);

$connection->close();
?>