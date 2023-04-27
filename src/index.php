<?php include_once("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login:</title>
</head>
<body>
    <div class="container">
        <form action="scripts/login.php" method="post">
            <div>
                <label for="email">Endereço de email</label>
                <input type="email" name="email" id="email" placeholder="usuario@curso.com">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Acessar o sistema</button>
            <a href="esqueci-minha-senha.php">Esqueci minha senha</a>
        </form>
    </div>
</body>
</html>