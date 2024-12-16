<?php 
    session_start();
    
    if( !isset($_POST["login"]) || !isset($_POST["senha"])) {
        header("Location: login.php");
        exit();
    }

    if($_POST["login"] != "adm" || $_POST["senha"] != "asd") {
        header("Location: login.php?erro=2");
        exit();
    }

    $_SESSION["login"] = "login";
    header("Location: main.php");
?>
