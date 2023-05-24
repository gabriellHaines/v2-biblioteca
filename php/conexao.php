<?php
    $host = '127.0.0.1';
    $username = 'root'; 
    $password = '';
    $database = 'biblioteca';
    $con = mysqli_connect($host,$username,$password,$database);
    if (!$con) {
        echo "erro ao conectar com a base de dados: " . mysqli_connect_error();
    }
?>