<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Cadastro de postagem</h3>
    <!-- action: para quem estou mandando os dados -->
    <!-- method: como estou mandando os dados -->
    <form action="salvar_postagem.php" method="POST">
        texto: <br>
        <input type="text" name="texto"> <br>

        data_hora: <br>
        <input type="text" name="data_hora"> <br>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>