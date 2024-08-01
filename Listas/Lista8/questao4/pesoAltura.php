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
    <h4>Digite o peso:</h4>
    <input id="idPeso" type="text" name="peso">
    <h4>Digite a altura:</h4>
    <input id="idAltura" type="text" name="altura">
    <input type="text" name="email"  value= "<?php echo $_GET["email"]; ?>" hidden>
    <input type="text" name="nome" value= "<?php echo $_GET["nome"]; ?>" hidden>
    <br><br>
    <input type="submit" value="Submeter dados para servidor">
</form>

<?php 
    if(isset($_GET["nome"]) && (isset($_GET["email"])) && (isset($_GET["peso"])) && (isset($_GET["altura"]))){
        $nome = $_GET["nome"]; 
        $email = $_GET["email"]; 
        $peso = $_GET["peso"]; 
        $altura = $_GET["altura"]; 
    }
?>