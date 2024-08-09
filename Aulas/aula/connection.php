<?php
    function connection(){
        $host="localhost";
        $user="root";
        $senha="aluno";
        $db="crud_ppi";
        $charset="utf8mb4";
        $dsn="mysql:host=$host;dbname=$db;charset=$charset";

        try{
            $conn = new PDO($dsn,$user,$senha);
            return $conn;
        } catch(PDOException $e){
            echo "Erro: ".$e->getMenssager();
            exit();
        }
    }

    if (connection()!=null){
        echo "Conexão ok";
    }
?>