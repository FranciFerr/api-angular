<?php
    //Variáveis
    $url = "localhost";
    $usuario = "root";
    $senha = "";
    $base = "api";//É a base de dados lá do banco

    //Conexão
    $conexao = mysqli_connect($url, $usuario, $senha, $base);

    //Arrumar caracteres especiais
    //para quando inserir nos dados caracteres especiais como "ç" ou acento "~" ele já formata no banco
    mysqli_set_charset($conexao, "utf8");
?>
    