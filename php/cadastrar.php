<?php
//Incluir conexão
include("conexao.php");

//obter dados
$obterDados = file_get_contents("php://input");

//extrair os dados do JSON
$extrair = json_decode($obterDados);

//separar dados do JSON
$nomeCurso = $extrair -> cursos -> nomeCurso;
$valorCurso = $extrair -> cursos -> valorCurso;

//SQL
$sql = "INSERT INTO cursos (nomeCurso, valorCurso) VALUES ('$nomeCurso', $valorCurso)";
mysqli_query($conexao, $sql);

//exportar os dados cadastrados 
$curso = [
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso

];

json_encode(['curso'].$curso);








?>