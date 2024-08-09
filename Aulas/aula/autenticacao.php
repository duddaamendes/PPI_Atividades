<?php
    include_once ("da_user.php");
    if(!isset($_POST['email']) && !isset($_POST['senha'])){
        echo "
            <script>
                window.alert('Informe logine senha');
                window.href='login.html';
            </script>
        ";
        exit();
    }

    $usr=checkUser($_POST['email'], $_POST['senha']);
    if (count($usr)==0){
        echo "login e senha invalidos";
    } else {
        echo "login e senha ok";
        session_start();
        print_r($usr);
        var_dump($usr[0].['id'])
        $SESSION['userid']=$usr[0].['id'];
    }
?>