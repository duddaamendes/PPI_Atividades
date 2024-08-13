<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title> 
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body{
            height: 100vh;
        }

        body,fieldset,form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <h2>Login</h2>
    <form action="autenticacao.php" method="post">
        <fieldset>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">

            <input type="submit" value="Entrar">
        </fieldset>
    </form>
</body>
</html>