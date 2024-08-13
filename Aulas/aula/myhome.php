<?php
     session_start();

     if(!isset($_SESSION['userid'])){
       header("Location:login.php");
       exit();
    }

    include_once("da_user.php");
    $user=selectUser($_SESSION['userid']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My home</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <h2> Bem Vindo <?php echo $user['id']. " - ". $user['name']; ?> <h2>
    <div class="menu">

        <a href="sair.php">Sair</a>
    </div>
    <div id="boxmain">
        <h2>Lista usuarios</h2>
        <?php
            $users=selectAllUsers();
            //var_dump($users);
        ?>

        <table>
            <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>Email</td>
                <td>Data nascimento</td>
            </tr>

            <tr>
                <?php
                    foreach($users as $user){
                        ?>
                            <tr>
                                <td> <a href="editar_user.php?id=<?php echo $user['id']; ?>">
                                    <?php echo $user['id']; ?></td>
                                </a>
                                <td> <?php echo $user['name']; ?></td>                                
                                <td> <?php echo $user['email']; ?></td>
                                <td> <?php echo $user['datanascimento']; ?></td>                            
                            </tr>
                        <?php
                    }
                ?>
            </tr>
        </table>
    </div>
</body>
</html>