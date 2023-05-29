<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livro</title>
</head>
<body>
    <div>
        <?php
            session_start();
            $id = $_SESSION["id"]; 
            $nome = $_SESSION["nome"]; 
            $tipo = $_SESSION["tipo"]; 
            $status = $_SESSION["status"];
            $usuario = $_SESSION["usuario"];
            $senha = $_SESSION["senha"]; 
            echo "id: " . $id .' nome: ' .$nome.' tipo: ' .$tipo.' status: ' .$status.' usuario: ' .$usuario.' senha: ' .$senha;
        ?>
    </div>
    <div>
        <form  method="post">
            <label for="codigo">Código(ISBN)</label><br>
            <input type="text" name = "codigo"><br>
            <label for="nomeLivro">Nome do Livro</label><br>
            <input type="text" name = "nomeLivro"><br>
            <label for="nomeAutor">Nome do Autor</label><br>
            <input type="text" name = "nomeAutor"><br>
            <label for="edicao">Edição</label><br>
            <input type="text" name = "edicao"><br>
            <label for="editora">Editora</label><br>
            <input type="text" name = "editora"><br>
            <label for="anoPubli">Ano da Publicação</label><br>
            <input type="text" name = "anoPubli"><br>
            <label for="numeroPaginas">Número de Páginas</label><br>
            <input type="text" name = "numeroPaginas"><br>
            <button name = "cLivro">Cadastrar Livro</button>
            <button name = "voltar">Voltar</button>
        </form>
    </div>
    <?php
    if (isset($_POST["cLivro"])) {
        require_once("../php/cLivro.php");
    }
    if (isset($_POST["voltar"])) {
        header("location:./lFuncionario.php");
    }
    ?>  
</body>
</html> 