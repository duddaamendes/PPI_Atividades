<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/listagem.php"> 
        <h3>Informe a lista de valores, separados por ; (ponto e vírgula):</h3>
        <input type="text" name="valores">
        <br> <br>
        <input type="submit" value="Submeter valores">
    </form>

    <?php
        if (!isset($_GET["valores"])){
            exit;
        }

        $string =$_GET["valores"];
        $soma = 0;
        $elementos = explode(";", $string);

        foreach($elementos as $key => $item){
            echo $key." ";
            $soma = $soma+$item;
        }

        echo "<p> Soma: $soma</p>"
    ?>
</body>
</html>