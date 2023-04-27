<?php

require_once("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    echo "$email <br/>";
    echo md5($password); # O md5 serve para fazer criptografia de senhas
}

?>