<?php
    session_start();
    if ( !isset($_SESSION["login"]) ){
        header("Location:login.php?erro=1");
        exit();
    }
    echo $_SESSION["login"];

?>

<h2>Menu</h2>

<a href="sair.php"><p>Sair</p></a>