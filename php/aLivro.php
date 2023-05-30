<?php
    require_once('./php/conexao.php');

    $livroUsuario = "SELECT liv_id, liv_codigo, liv_nome, aut_nome, liv_edicao, liv_editora, liv_numPagina
    FROM livro
    WHERE livro_status = 'ativo'";
    
    $resultado = mysqli_query($con, $livroUsuario);
    
    if (mysqli_num_rows($resultado) == 0) {
        echo "Nenhum livro do usuário encontrado.";
    } else {
        while ($informacao = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $informacao["isbn"] . "</td>";
            echo "<td>" . $informacao["nome_livro"] . "</td>";
            echo "<td>" . $informacao["nome_autor"] . "</td>";
            echo "<td>" . $informacao["edicao"] . "</td>";
            echo "<td>" . $informacao["editora"] . "</td>";
            echo "<td>" . $informacao["ano_publicacao"] . "</td>";
            echo "<td>" . $informacao["num_paginas"] . "</td>";
            echo "<td><a href='./livroAltera.php?isbn=" . $informacao['isbn'] . "'><button>Alterar</button></a></td>";
            echo "<td><form method='post'><input type='hidden' name='isbn' value='" . $informacao['isbn'] . "'><button type='submit' name='excluir'>Excluir</button></form></td>";
            echo "</tr>";
        }
    }
    
    if (isset($_POST['excluir'])) {
        $isbn = $_POST['isbn'];
        require_once('./php/conexao.php');
    
        $altera = "UPDATE livro 
                   SET livro_status = 'desativado'
                   WHERE isbn = '$isbn'";
    
        mysqli_query($con, $altera);
    
        if ($altera) {
            echo "Livro excluído com sucesso.";
        } else {
            echo "Erro ao excluir livro.";
        }
    }
    
    mysqli_close($con);


?>