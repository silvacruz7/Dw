<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Cadastro de Matrícula</h3>

    <form action="salvar_matricula.php" method="GET">

        Id de Aluno:

        <br>

        <select name="id_aluno">
            <?php
            require_once "../conexao.php";

            $sql = "SELECT * FROM aluno";
            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id_aluno = $linha['id_aluno'];
                $nome = $linha['nome'];

                echo "<option value='$id_aluno'>$nome</option>";
            }
            ?>
        </select> <br>

        Id de Curso:

        <br>

        <select name="id_curso">
            <?php
            require_once "../conexao.php";

            $sql = "SELECT * FROM curso";
            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id_curso = $linha['id_curso'];
                $nome = $linha['nome'];

                echo "<option value='$id_curso'>$nome</option>";
            }
            ?>
        </select> <br>

        Id de Funcionário: <br>

        <select name="id_funcionario">
            <?php
            require_once "../conexao.php";

            $sql = "SELECT * FROM funcionario";
            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id_funcionario = $linha['id_funcionario'];
                $nome = $linha['nome'];

                echo "<option value='$id_funcionario'>$nome</option>";
            }
            ?>
        </select> <br>

        <input type="submit" value="Cadastrar">

    </form>
    <br>
    <a href="../index.php">Menu</a>

</body>

</html>