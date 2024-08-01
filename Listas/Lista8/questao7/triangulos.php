<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangulos</title>
</head>
<body>
<form action="http://localhost/triangulos.php"> 
        <h3>Informe os valores dos lados do triângulo:</h3>
        <label for="val1">Valor lado um:</label>
        <input id="val1" type="text" name="val1">
        <br> <br>
        <label for="val2">Valor lado dois:</label>
        <input id="val2" type="text" name="val2">
        <br> <br>
        <label for="val3">Valor lado três:</label>
        <input id="val3" type="text" name="val3">
        <br> <br>
        <input type="submit" value="Submeter valores">
    </form>

    <?php
        if(!isset ($_GET["val1"]) && !isset($_GET["val2"]) && !isset($_GET["val3"])){
            exit;
        }

        $val1 = $_GET["val1"];
        $val2 = $_GET["val2"];
        $val3 = $_GET["val3"];

        if ($val1 == 0 || $val2 == 0 || $val3 == 0) {
            echo "<br> Os valores dos lados devem ser maiores que zero.";
        } else if ($val1 == $val2 && $val2 == $val3) {
            echo "<br> O triângulo é equilátero";
        } else if ($val1 == $val2 || $val2 == $val3 || $val1 == $val3) {
            echo "<br> O triângulo é isósceles";
        } else {
            echo "<br> O triângulo é escaleno";
        }
    ?>
</body>
</html>