<?php

require_once("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuarios WHERE email=? AND senha=?";
    $stmt = $conn->prepare($sql);
    // $crip_password = md5($password); # O md5 serve para fazer criptografia de senhas
    $stmt->bind_param("ss", $email, $password);

    $stmt->execute();
    $result = $stmt->get_result();
    var_dump($result);
}

?>