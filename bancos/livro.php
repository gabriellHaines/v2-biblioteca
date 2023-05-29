
<?php
    require_once("../php/conexao.php"); 

    $dTable = "DROP TABLE livro";
    if (mysqli_query($con,$dTable)) {
        echo "Tabela excluida com susceso";
    }else{
        echo 'ERRO: '. mysqli_error($con);
    }
    $cTable = "CREATE TABLE livro (
        liv_id INT PRIMARY KEY AUTO_INCREMENT,
        liv_codigo VARCHAR(20),
        liv_nome VARCHAR(20),
        aut_nome VARCHAR(50),
        liv_edicao VARCHAR(20),
        liv_editora VARCHAR(100),
        liv_ano VARCHAR(20),
        liv_numPagina VARCHAR(10),
        liv_status ENUM('ativo', 'desativado') NOT NULL DEFAULT 'ativo'        
    )";
    if (mysqli_query($con,$cTable)) {
        echo "Tabela criada com susceso";
    }else{
        echo 'ERRO: '. mysqli_error($con);
    }
    mysqli_close($con);

?>