<?php
//Incluir conexão
include("conexao.php");//este é o arquivo cenexao.php que dá acesso ao banco de dados

//Sql
$sql = "SELECT * FROM cursos";//irá selecionar todos os dados da tabela cursos.

//Executar
$executar = mysqli_query($conexao, $sql);//a variável $conexao do outro arquivo pode ser usada aqui por causa do include

//Vetor
$cursos = [];//vai armazenar todos os dados das colunas

//Indice
$indice = 0;//mostra em qual posição ele vai guardar as informações no json

//Laço
//aqui o laço vai executar cada linha de dados que estiver registrada na tabela cursos
while($linha = mysqli_fetch_assoc($executar)){
    $cursos[$indice]['idCurso'] = $linha['idCurso'];
    $cursos[$indice]['nomeCurso'] = $linha['nomeCurso'];
    $cursos[$indice]['valorCurso'] = $linha['valorCurso'];

    $indice++;
}

//JSON(ENCAPSULAMENTO)
json_encode(['cursos'=>$cursos]);
var_dump($cursos);
?>