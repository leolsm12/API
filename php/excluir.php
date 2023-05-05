<?php
//Incluir conexão
include("conexao.php");

//obter dados
$obterDados = file_get_contents("php://input");

//extrair os dados do JSON
$extrair = json_decode($obterDados);

//separar dados do JSON
$idCurso = $extrair -> cursos -> idCurso;


//SQL
$sql = "DELETE FROM cursos WHERE idCursos = $idCurso";
mysqli_query($conexao, $sql);









?>