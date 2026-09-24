<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Cadastro de usuario</h3>
    <!-- action: para quem estou mandando os dados -->
    <!-- method: como estou mandando os dados -->
    <form action="salvar_usiario.php" method="POST">
        username: <br>
        <input type="text" name="usernome"> <br>

        name: <br>
        <input type="text" name="nome"> <br>
        
        email: <br>
        <input type="text" name="email"> <br>

        senha: <br>
        <input type="text" name="senha"> <br>

        Foto: <br>
        <input type="text" name="foto"> <br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>