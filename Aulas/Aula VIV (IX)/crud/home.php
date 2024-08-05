<h2>Bem vindo</h2>
<hr>
<a href="sair.php">Sair</a>
<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header("Location:login.php");
        exit();
    } else{
        echo $_SESSION['user_id'];
        echo $_SESSION['nome'];
    }
?>