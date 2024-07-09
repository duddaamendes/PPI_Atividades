<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/pesoAltura.php"> <!--para onde vc vai mandar-->
        <p>Digite o nome:</p>
        <input id="idNome" type="text" name="nome">
        <p>Digite a idade:</p>
        <input id="idIdade" type="text" name="idade">
        <input type="submit" value="Submeter dados para servidor">
    </form>

    <?php 
        if(isset($_GET["nome"]) && (isset($_GET["idade"]))){
            $nome = $_GET["nome"]; 
            $idade = $_GET["idade"]; 
        }
    ?>
</body>
</html>