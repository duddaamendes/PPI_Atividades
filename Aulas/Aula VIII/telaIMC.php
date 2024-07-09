<form action="http://localhost/telaIMC.php"> <!--para onde vc vai mandar-->
    <p>Nome: </p>
    <?php 
        if (isset($_GET["nome"])){
            echo $_GET["nome"];
        }
    ?>
    <p>Idade: </p>
    <?php 
        if (isset($_GET["idade"])){
            echo $_GET["idade"];
        }
    ?>
    <p>Peso: </p>
    <?php 
        if (isset($_GET["peso"])){
            echo $_GET["peso"];
        }
    ?>
    <p>Altura:</p>
    <?php 
        if (isset($_GET["altura"])){
            echo $_GET["altura"];
        }
    ?>
</form>

<?php 
    if(isset($_GET["nome"]) && (isset($_GET["idade"])) && (isset($_GET["peso"])) && (isset($_GET["altura"]))){
        $nome = $_GET["nome"]; 
        $idade = $_GET["idade"]; 
        $peso = $_GET["peso"]; 
        $alura = $_GET["altura"]; 

        $imc = $peso/$alura*$altura;

        echo "IMC: ".$imc; //fazer calculo & concatenação com o "." (ponto)
    }
?>