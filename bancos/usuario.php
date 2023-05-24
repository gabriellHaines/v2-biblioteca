<?php
    require_once("../php/conexao.php");
    $dTable = "DROP TABLE usuario";
    if (mysqli_query($con,$dTable)) {
        echo "Tabela excluida com susceso";
    }else{
        echo 'ERRO: '. mysqli_error($con);
    }
    $cTable = "CREATE TABLE usuario (
        usu_id INT PRIMARY KEY AUTO_INCREMENT,
        usu_usuario VARCHAR(20),
        usu_senha VARCHAR(20),
        usu_nome VARCHAR(50),
        usu_cpf VARCHAR(20),
        usu_endereco VARCHAR(100),
        usu_telefone VARCHAR(20),
        usu_data_nascimento VARCHAR(10),
        usu_tipo ENUM('funcionario','usuario') NOT NULL DEFAULT 'usuario',
        usu_status ENUM('ativo', 'desativado') NOT NULL DEFAULT 'ativo'        
    )";
    if (mysqli_query($con,$cTable)) {
        echo "Tabela criada com susceso";
    }else{
        echo 'ERRO: '. mysqli_error($con);
    }
    mysqli_close($con);
?>