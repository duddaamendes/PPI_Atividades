<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title> 
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div id="boxmain">
    <h2>Login</h2>
    <form action="autenticacao.php" method="post">
       
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="bolhas">

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="bolhas">

            <input type="submit" value="Entrar" id="btn">
        
        <a href="registrar_user.php" id="btnCad" ><p>Registrar novo usuario</p></a>
    </form>

    <div class="status">
            <?php
                if(isset($_GET['ok'])){ ?>
                    <p class="sucesso"> Cadastro realizado com sucesso</p>
                    <?php
                }
            ?>
        </div>
    </div>
</body>
</html>