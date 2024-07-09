<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
    <p>Bla <?php echo "Olá mundão"; ?> Bla</p>

    <?php 
        echo "Olá mundão <br>"; //o br faz a quebra de linha

        $nome = "Baunilha <br>"; //criar váriavel

        echo $nome; //imprimir a váriavel

        $a = $_GET["varA"]; //pegar a variável
        $b = $_GET["varB"]; //pegar a variável

        $a = 2;
        $b = 3;
        echo "Soma de A+B: ".$a+$b; //fazer calculo & concatenação com o "." (ponto)
    ?>
</body>
</html>