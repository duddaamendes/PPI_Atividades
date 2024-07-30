<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="valores">Informe os valores</label>
        <input id="val" type="text" name="val">
        <input type="submit" value="Calcular">
    </form>

    <?php
        if(!isset ($_GET["val"])){
            exit;
        }

        $mes = intval($_GET["mes"]);

        echo $meses[$mes];
    ?>
</body>
</html>