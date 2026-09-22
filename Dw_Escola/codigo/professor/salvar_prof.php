<?php 

require_once "../conexao.php";

$nome = $_GET['nome'];
$disciplina = $_GET['disciplina'];
$salario = $_GET['salario'];
$data_contratacao = $_GET['data_contratacao'];
$email = $_GET['email'];

$sql = "INSERT INTO professor (nome, disciplina, salario, data_contratacao, email)VALUES ('$nome', '$disciplina', '$salario', '$data_contratacao', '$email');";

mysqli_query($conexao, $sql);

header("Location: cad_prof.php")
?>

<br><br>

<a href="../index.php">Início</a> <br><br>