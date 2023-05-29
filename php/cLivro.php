<?php
    $codigo = $_POST["codigo"];
    require_once("../php/conexao.php");
    $sTable = "SELECT liv_codigo FROM livro
    WHERE liv_codigo = ?";
    $stmt = mysqli_prepare($con, $sTable);
    mysqli_stmt_bind_param($stmt, "s", $codigo);
    mysqli_stmt_execute($stmt);
    $sRetorno = mysqli_stmt_get_result($stmt);
    if ($sRetorno) {
        if (mysqli_num_rows($sRetorno) == 0) {
            $iTable = "INSERT INTO livro(liv_codigo ,liv_nome ,aut_nome ,liv_edicao ,liv_editora ,liv_ano ,liv_numPagina)
            VALUES(?,?,?,?,?,?,?)";
            $stmt = mysqli_prepare($con,$iTable);
            mysqli_stmt_bind_param($stmt,"sssssss",$codigo,$_POST["nomeLivro"],$_POST["nomeAutor"],$_POST["edicao"],$_POST["editora"],$_POST["anoPubli"],$_POST["numeroPaginas"]);
            if (mysqli_stmt_execute($stmt)) {
                echo "cadastro realizado com sucesso";
            } else {
                echo 'ERRO INSERT: ' . mysqli_error($con);
            }
            mysqli_stmt_close($stmt);
            mysqli_close($con);
        }else{
            echo "usuario já cadastrado, tente outro";
        }
    }else{
        echo 'ERRO SELECT: '. mysqli_error($con);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($con);
?>