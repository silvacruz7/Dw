<?php 

require_once "../conexao.php";

$id_aluno = $_GET['id_aluno'];
$id_curso = $_GET['id_curso'];
$id_funcionario = $_GET['id_funcionario'];

$sql = "INSERT INTO matricula (id_aluno, id_curso, id_funcionario) VALUES ('$id_aluno', '$id_curso','$id_funcionario');";

mysqli_query($conexao, $sql);

header("Location: cad_matricula.php");
?>

<br><br>

<a href="../index.php">Início</a> <br><br>