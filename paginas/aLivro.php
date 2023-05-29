<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar dados do Livro</title>
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
    
</body>
</html>