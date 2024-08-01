<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        date_default_timezone_set('America/Sao_Paulo');
        $hora = date ('H: i: s');
        echo "<p>Hora atual: $hora</p>";
    ?>
</body>
</html>