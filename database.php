<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "cloudware";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error){
    die($connection->connect_error);
}

?>