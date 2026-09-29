
<?php
//pegar as variáveis
$texto = $_POST['texto'];
$data_hora = $_POST['data'];


//monta o SQL
// INSERT INTO professor (nome, data_nascimento, formacao)
// VALUES ('Teste', '2000-12-31', 'Mestre História');
$sql = "INSERT INTO postagem (texto, data_hora) VALUES ('$texto', '$data_hora')";

//executa SQL
require_once "../conexao.php";
mysqli_query($conexao, $sql);


//desvia a navegação
//header("Location: ../sucesso.html");