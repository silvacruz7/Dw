<?php
require_once "../conexao.php";

$id_professor = $_GET['id_professor'];

$sql = "DELETE FROM professor WHERE id_professor = '$id_professor'";

mysqli_query($conexao, $sql);

header("Location: lista_prof.php");
exit;

?>