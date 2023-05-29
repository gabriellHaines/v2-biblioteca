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