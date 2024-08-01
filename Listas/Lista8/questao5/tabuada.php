<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/tabuada.php"> <!--para onde vc vai mandar-->
        <h2>Informe um número para ver sua tabuada:</h2>
        <input id="num" type="text" name="num">
        <input type="submit" value="Submeter número">
    </form>

    <?php
        if(isset($_GET["num"])){
            $num = $_GET["num"]; 
            for($i = 1; $i <= 10; $i++){
                $mult = $i * $num;
                echo "<br>".$num." * ".$i." = ".$mult;
            }
        }
    ?>

</body>
</html>