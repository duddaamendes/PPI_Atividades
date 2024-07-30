<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="num1"></label>
        <input id="num1" type="text" name="inicio">
        <label for="num2"></label>
        <input id="num2" type="text" name="fim">
        
        <input type="submit" value="Eniar">
    </form>

    <?php
        if(!isset ($_GET["inicio"]) && !isset($_GET["fim"])){
            exit;
        }

        $i = intval($_GET["inicio"]);
        for($i = 1; $i <= $_GET["fim"]; $i++){
            ?>
            <span class="box"><?php echo $i; ?></span>
            <?php
        }
    ?>
</body>
</html>