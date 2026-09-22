<?php
require_once "../conexao.php";

$id_aluno = $_GET['id_aluno'];

$sql = "DELETE FROM aluno WHERE id_aluno = '$id_aluno'";

mysqli_query($conexao, $sql);

header("Location: lista_aluno.php");
exit;
