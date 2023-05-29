<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"]; 
    require_once("./php/conexao.php");
    $sTable = "SELECT usu_usuario, usu_senha , usu_id, usu_nome  , usu_tipo , usu_status
    FROM usuario
    WHERE usu_usuario =  ?";
    $stmt = mysqli_prepare($con, $sTable);
    mysqli_stmt_bind_param($stmt, "s", $usuario);
    mysqli_stmt_execute($stmt);
    $sRetorno = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($con);
    if (mysqli_num_rows($sRetorno) == 1 ) {
        $rDados =  mysqli_fetch_assoc($sRetorno);
        if ($rDados["usu_status"] == "ativo") {
        $senhaB = $rDados["usu_senha"];
            if ($senhaB == $senha) {
                session_start();            
                $_SESSION["id"] = $rDados["usu_id"];
                $_SESSION["nome"] = $rDados["usu_nome"];
                $_SESSION["tipo"] = $rDados["usu_tipo"]; 
                $_SESSION["status"] = $rDados["usu_status"];
                $_SESSION["usuario"] = $usuario;
                $_SESSION["senha"] = $senha;    
                if ($rDados["usu_tipo"] == "usuario" ) {
                    header('location:./paginas/lUsuario.php');
                }else {
                    header('location:./paginas/lFuncionario.php');
                }       
            }else{
            echo "senha incorreta";
            }
        }else{
            echo "usuário desativado";
        }
    }else{
        echo "usuário invalido";
    } 
?>