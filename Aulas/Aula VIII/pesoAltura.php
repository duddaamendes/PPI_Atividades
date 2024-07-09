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
    <p>Digite o peso:</p>
    <input id="idPeso" type="text" name="peso">
    <p>Digite a altura:</p>
    <input id="idAltura" type="text" name="altura">
    <input type="text" name="idade"  value= "<?php echo $_GET["idade"]; ?>" hidden>
    <input type="text" name="nome" value= "<?php echo $_GET["nome"]; ?>" hidden>
    <input type="submit" value="Submeter dados para servidor">
</form>

<?php 
    if(isset($_GET["nome"]) && (isset($_GET["idade"])) && (isset($_GET["peso"])) && (isset($_GET["altura"]))){
        $nome = $_GET["nome"]; 
        $idade = $_GET["idade"]; 
        $peso = $_GET["peso"]; 
        $alura = $_GET["altura"]; 
    }
?>