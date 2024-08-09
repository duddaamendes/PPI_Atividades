<?php
    include_once ("da_user.php");

    if (connection() == null){
        echo "Erro na conexao";
    } else{
        echo "Conexao foi";
    }

    echo"<br>";
    echo "Id usuario".insertUser("maria", "maria", "senha", "2020-10-10");

    //echo"<br> <pre>";
    //echo "". print_r(selectAllUsers());

    echo "<br> <hr> User 10 <pre>";
    print_r(selectUser(10));
    echo "</pre>";

    echo "<br><hr> Check Login e senha <pre>";
    print_r(checkUser("maria", "senha"));
    echo "</pre>"
?>