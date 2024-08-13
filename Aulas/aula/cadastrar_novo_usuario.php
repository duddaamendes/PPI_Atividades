<?php
    include_once ("da_user.php");

    if(!isset($_POST['nome']) || !isset($_POST['email']) || !isset($_POST['senha']) || !isset($_POST['dataN'])){
        header("Location:login.php?erro=2");
    }

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $datanascimento=$_POST['dataN'];
    
    if(insertUser($nome, $email, $senha, $datanascimento) > 0){
        header("Location:login.php?ok=9");
    }
?>