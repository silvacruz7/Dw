<?php 

require_once "../conexao.php";

$nome = $_GET['nome'];
$carga_horaria = $_GET['carga_horaria'];
$id_professor = $_GET['id_professor'];

$sql = "INSERT INTO curso (nome, carga_horaria, id_professor)VALUES ('$nome', '$carga_horaria', '$id_professor');";

mysqli_query($conexao, $sql);

header("Location: cad_curso.php")
?>

<br><br>

<a href="../index.php">Início</a> <br><br>