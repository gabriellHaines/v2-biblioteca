<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $sTable = "SELECT usu_usuario, usu_senha , usu_id, usu_nome  , usu_tipo , usu_status
    FROM usuario
    WHERE usu_usuario = '$usuario'";
    require_once("./php/conexao.php");
    $rSelect = mysqli_query($con , $sTable);
    if (mysqli_num_rows($rSelect) == 1 ) {
        $rDados =  mysqli_fetch_assoc($rSelect);
        $senhaB = $rDados["usu_senha"];
        if ($senhaB == $senha) {
            $id = $rDados["usu_id"];
            $nome = $rDados["usu_nome"];
            $tipo = $rDados["usu_tipo"];
            $status = $rDados["usu_status"];
            session_start();
            $_SESSION["id"] = $id ;
            $_SESSION["nome"] = $nome ;
            $_SESSION["tipo"] = $tipo ;
            $_SESSION["status"] = $status ;
            $_SESSION["usuario"] = $usuario ;
            $_SESSION["senha"] = $senha ;
            /*
            $_SESSION["id"] = $rDados["usu_id"];
            $_SESSION["nome"] = $rDados["usu_nome"];
            $_SESSION["tipo"] = $rDados["usu_tipo"]; 
            $_SESSION["status"] = $rDados["usu_status"];
            $_SESSION["usuario"] = $usuario;
            $_SESSION["senha"] = $senha;           
            */
            header('location:./paginas/logado.php');
        }else {
            echo "senha incorreta";
        }
    }else{
        echo "usuário invalido";
    } 
?>