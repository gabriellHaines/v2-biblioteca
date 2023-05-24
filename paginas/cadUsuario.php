<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <div>
        <form method = "post">
            <label for="cadUsuario">Cadastro de Usuário</label><br>
            <label for="usuario">Usuário</label><br>
            <input type="text" name = "usuario"><br>
            <label for="senha">Senha</label><br>
            <input type="text" name = "senha"><br>
            <label for="nome">Nome</label><br>
            <input type="text" name = "nome"><br>
            <label for="cpf">CPF</label><br>
            <input type="text" name = "cpf"><br>
            <label for="endereco">Endereço</label><br>
            <input type="text" name = "endereco"><br>
            <label for="telefone">Telefone</label><br>
            <input type="text" name = "telefone"><br>
            <label for="data_nascimento">Data de Nascimento</label><br>
            <input type="text" name = "data_nascimento"><br>
            <button name = "cadastrar">Cadastrar</button>
            <button name = "login">Login</button>
        </form>
    </div>
    <?php
        if (isset($_POST["cadastrar"])) {
            require_once("../php/cadUsuario.php");
        }
        if (isset($_POST["login"])) {
            header("location:../index.php");
        }
    ?>
</body>
</html>