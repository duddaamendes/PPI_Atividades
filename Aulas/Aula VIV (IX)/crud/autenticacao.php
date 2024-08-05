<?php
    if($_POST['login']=="admin" && $_POST["passwd"]=="123456"){
        session_start();
        $_SESSION['user_id']=10;
        $_SESSION['nome']="Maria";
        header("Location:home.php");
    } else{
        echo "Login e/ou senha errados";
    }
?>