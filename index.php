<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <form method="post">
            <label for="titulo">Login</label><br>
            <label for="usuario">Usuário</label><br>
            <input type="text" name = "usuario"><br>
            <label for="senha">Senha</label><br>
            <input type="text" name = "senha"><br>
            <button name = "login">Logar</button>
            <button name = "cadastrar">Cadastrar</button>
        </form>
    </div>
    <?php
        if (isset($_POST["login"])) {
            require_once("./php/login.php");
        }
        if (isset($_POST["cadastrar"])) {
            header("location:./paginas/cadUsuario.php");
        }
    ?>
</body>
</html>