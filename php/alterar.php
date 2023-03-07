<?php

//Incluir a conexão
include("conexao.php");

//Obter dados
$obterDados = file_get_contents("php://input");//capturar e manipular usando linguagem php

//Extrair os dados do JSON
$extrair = json_decode($obterDados);

//Separar os dados do JSON
//cursos é a variável usada para o encode do JSON lá no arquivo listar.php
$idCurso = $extrair->cursos->idCurso;
$nomeCurso = $extrair->cursos->nomeCurso;
$valorCurso = $extrair->cursos->valorCurso;

//SQL
$sql = "UPDATE cursos SET nomeCurso='$nomeCurso', valorCurso=$valorCurso WHERE idCurso=$idCurso";
mysqli_query($conexao, $sql);
//Exportar os dados cadstrados
$curso = [
    'idCurso' => $idCurso,
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso
];
json_encode(['curso'].'=>'.$curso);

?>