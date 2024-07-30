<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/numPar.php">
        <p>Digite um número:</p>
        <input id="num" type="text" name="num">

        <?php
            if(isset($_GET["num"])){
                $num = $_GET["num"];
                if($num % 2 == 0){
                    echo "<br> Número é par!";
                } else{
                    echo "<br> Número é impar!";
                }
            }
        ?>
    </form>
</body>
</html>