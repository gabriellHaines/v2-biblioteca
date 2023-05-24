<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $data_nascimento = $_POST["data_nascimento"];
    $iTable = "INSERT INTO usuario(
        usu_usuario ,
        usu_senha ,
        usu_nome ,
        usu_cpf ,
        usu_endereco ,
        usu_telefone ,
        usu_data_nascimento
        )
        VALUES(
        '$usuario',
        '$senha',
        '$nome',
        '$cpf',
        '$endereco',
        '$telefone',
        '$data_nascimento'
        )
    ";
    require_once("../php/conexao.php");
    if (mysqli_query($con,$iTable)) {
        echo "cadastro feio com susceso";
    }else{
        echo 'ERRO: '. mysqli_error($con);
    }
    mysqli_close($con);
    
?>