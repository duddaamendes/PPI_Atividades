<?php
    session_start();
    echo "<h2> Na sessão existe o texto: ".$_SESSION['txt'];
    header("Refreash:5")
?>