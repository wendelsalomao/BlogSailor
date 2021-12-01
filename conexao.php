<?php

$server = "localhost";
$user = "root";
$password = "";
$dbname = "dfpizzaria";

$conn = new mysqli($server, $user, $password, $dbname);


if ($conn->connect_errno){
    echo "Falha ao conectar: (" . $conn->connect_errno . ") " . $conn->connect_errno;
}
?>