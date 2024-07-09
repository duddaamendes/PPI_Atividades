
<form action="http://localhost/index.php"> <!--para onde vc vai mandar-->
    <input id="idVariavelA" type="text" name="varA" value=<?php 
        if (isset($_GET["varA"])){
            echo $_GET["varA"];
        }
        ?>
    >
    <input id="idVariavelB" type="text" name="varB" value=<?php 
        if (isset($_GET["varB"])){
            echo $_GET["varB"];
        }
        ?>
    >
    <input type="submit" value="Submeter dados para servidor">
</form>

<?php 
    if(isset($_GET["varA"]) && (isset($_GET["varB"]))){
        $a = $_GET["varA"]; //pegar a variável
        $b = $_GET["varB"]; //pegar a variável

        echo "Soma de A+B: ".$a+$b; //fazer calculo & concatenação com o "." (ponto)
    }
?>