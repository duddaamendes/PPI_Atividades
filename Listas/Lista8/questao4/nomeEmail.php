<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/pesoAltura.php"> <!--para onde vc vai mandar-->
        <h4>Digite o nome:</h4>
        <input id="idNome" type="text" name="nome">
        <h4>Digite o email:</h4>
        <input id="idEmail" type="text" name="email">
        <br> <br>
        <input type="submit" value="Submeter dados para servidor">
    </form>

    <?php 
        if(isset($_GET["nome"]) && (isset($_GET["email"]))){
            $nome = $_GET["nome"]; 
            $email = $_GET["email"]; 
        }
    ?>
</body>
</html>