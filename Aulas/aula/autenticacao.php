<?php
    include_once ("da_user.php");
    //verifica se parametros foram recebidos
    if(!isset($_POST['email']) && !isset($_POST['senha'])){
        echo "
            <script>
                window.alert('Informe logine senha');
                window.href='login.php?erro=1';
            </script>";
        exit();
    }

    //verifica se logine senha estão corretos
    $usr=checkUser($_POST['email'], $_POST['senha']);
    if (count($usr)==0){
        echo "login e senha invalidos";
    } else {
        echo "login e senha ok";
        session_start();
        //print_r($usr[0]["id"]);
        //var_dump($usr[0]["id"]);
        $usr=$usr;
        $_SESSION['userid']=$usr["id"];
        header("Location:myhome.php");
    }
?>