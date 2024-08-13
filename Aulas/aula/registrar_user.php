<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="boxmain">
        <form action="cadastrar_novo_usuario.php" method="post">
        
            <h3>Informe os dados para cadastro: </h3>
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" class="bolhas">

            <label for="email">Email: </label>
            <input type="text" id="email" name="email" class="bolhas">

            <label for="senha">Senha: </label>
            <input type="password" id="senha" name="senha" class="bolhas">

            <label for="dataN">Data de nascimento: </label>
            <input type="date" id="dataN" name="dataN" class="bolhas">

            <br>
            <input type="submit" value="Cadastrar novo usuario" id="btn">
        
        </form>
    </div>
</body>
</html>