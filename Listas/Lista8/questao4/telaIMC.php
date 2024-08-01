<form action="http://localhost/telaIMC.php"> <!--para onde vc vai mandar-->
    <h4>Nome: </h4>
    <?php 
        if (isset($_GET["nome"])){
            echo $_GET["nome"];
        }
    ?>
    <h4>Idade: </h4>
    <?php 
        if (isset($_GET["email"])){
            echo $_GET["email"];
        }
    ?>
    <h4>Peso: </h4>
    <?php 
        if (isset($_GET["peso"])){
            echo $_GET["peso"];
        }
    ?>
    <h4>Altura:</h4>
    <?php 
        if (isset($_GET["altura"])){
            echo $_GET["altura"];
        }
    ?>
</form>

<?php 
    if(isset($_GET["nome"]) && (isset($_GET["email"])) && (isset($_GET["peso"])) && (isset($_GET["altura"]))){
        $nome = $_GET["nome"]; 
        $email = $_GET["email"]; 
        $peso = $_GET["peso"]; 
        $altura = $_GET["altura"]; 

        $alturaDois = $altura*$altura;
        $imc = $peso/$alturaDois;

        $imcFormatado = number_format($imc, 2);

        echo "<br> <br> IMC: ".$imcFormatado; //fazer calculo & concatenação com o "." (ponto)
    }
?>