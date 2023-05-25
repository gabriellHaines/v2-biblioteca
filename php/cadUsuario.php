<?php
    $usuario = $_POST["usuario"];    
    require_once("../php/conexao.php");
    $sTable = "SELECT usu_usuario FROM usuario WHERE usu_usuario = ?";
    $stmt = mysqli_prepare($con, $sTable);
    mysqli_stmt_bind_param($stmt, "s", $usuario);
    mysqli_stmt_execute($stmt);
    $sRetorno = mysqli_stmt_get_result($stmt);
    if ($sRetorno) {
        if (mysqli_num_rows($sRetorno) == 0) {
            $iTable = "INSERT INTO usuario(usu_usuario ,usu_senha ,usu_nome ,usu_cpf ,usu_endereco ,usu_telefone ,usu_data_nascimento)
            VALUES(?,?,?,?,?,?,?)";
            $stmt = mysqli_prepare($con,$iTable);
            mysqli_stmt_bind_param($stmt,"sssssss",$usuario,$_POST["senha"],$_POST["nome"],$_POST["cpf"],$_POST["endereco"],$_POST["telefone"],$_POST["data_nascimento"]);
            if (mysqli_stmt_execute($stmt)) {
                echo "cadastro realizado com sucesso";
            } else {
                echo 'ERRO INSERT: ' . mysqli_error($con);
            }
            mysqli_stmt_close($stmt);
            mysqli_close($con);
            header("location:../index.php");  
        }else{
            echo "usuario já cadastrado, tente outro";
        }            
    }else{
        echo 'ERRO SELECT: '. mysqli_error($con);
    }
    mysqli_close($con);
?>