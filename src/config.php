<?php

$host = "db";
$username = "root";
$password = "duque2023";
$dbname = "curso";

$conn = mysqli_connect($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados");
}

echo "Conexão bem sucedida com o banco de dados";
?>