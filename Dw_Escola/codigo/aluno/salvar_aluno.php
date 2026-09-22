<?php 

require_once "../conexao.php";

$nome = $_GET['nome'];
$data_nascimento = $_GET['data_nascimento'];
$email = $_GET['email'];
$turma = $_GET['turma'];

$sql = "INSERT INTO aluno (nome, data_nascimento, email, turma)VALUES ('$nome', '$data_nascimento', '$email', '$turma');";

mysqli_query($conexao, $sql);

header("Location: cad_aluno.php")
?>

<br><br>

<a href="../index.php">Início</a> <br><br>