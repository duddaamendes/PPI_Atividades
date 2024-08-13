<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="boxmain">
        <form action="cadastrar_novo_usuario.php" method="post">
        
            <h3>Edite os dados: </h3>
            <label for="nome">Nome novo: </label>
            <input type="text" id="nome" name="nome" class="bolhas">

            <label for="email">Email novo: </label>
            <input type="text" id="email" name="email" class="bolhas">

            <label for="senha">Senha nova: </label>
            <input type="password" id="senha" name="senha" class="bolhas">

            <label for="dataN">Data de nascimento nova: </label>
            <input type="date" id="dataN" name="dataN" class="bolhas">

            <br>
            <input type="submit" value="Editar usuario" id="btn">
        
        </form>
    </div>
</body>
</html>