
<?php
//pegar as variáveis
$username = $_POST['username'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$foto = $_POST['foto'];

//monta o SQL
// INSERT INTO professor (nome, data_nascimento, formacao)
// VALUES ('Teste', '2000-12-31', 'Mestre História');
$sql = "INSERT INTO usuario (username, nome, email, senha, foto) VALUES ('$username', '$nome', '$email','$senha','$foto')";

//executa SQL
require_once "../conexao.php";
mysqli_query($conexao, $sql);


//desvia a navegação
//header("Location: ../sucesso.html");