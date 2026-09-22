<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h2>Lista de Alunos</h2>

    <table>
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Data de Nascimento</td>
            <td>Email</td>
            <td>Turma</td>
            <td>ação</td>
        </tr>
        <?php
        require_once "../conexao.php";

        $sql = "SELECT * FROM aluno";

        $resultados = mysqli_query($conexao, $sql);

        //quebra a variável $resultados em linhas (vetores/array)
        while ($linha = mysqli_fetch_array($resultados)) {
            $id_aluno = $linha['id_aluno'];
            $nome = $linha['nome'];
            $data_nascimento = $linha['data_nascimento'];
            $email = $linha['email'];
            $turma = $linha['turma'];

            echo "<tr>";
            echo "<td>$id_aluno</td>";
            echo "<td>$nome</td>";
            echo "<td>$data_nascimento</td>";
            echo "<td>$email</td>";
            echo "<td>$turma</td>";
            echo "<td><a href='excluir_aluno.php?id_aluno=$id_aluno'><img class='lixo' src='../imagens/lixeira.png'></a></td>";
            echo "</tr>";
        }


        ?>
    </table>

<br>

<a href="../index.php">Menu</a>
</body>

</html>