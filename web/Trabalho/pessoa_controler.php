<?php

include_once("database.php");
include_once("pessoa.php");


if (isset($_POST["acao"]) && $_POST["acao"] == "cadastrar"){
    if( isset($_POST["nome"]) && isset($_POST["email"]) ) {
    
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        insere_usuario($nome, $email);
        header( header: "Location: listar.php");

}
}
else {
    echo " Erro ao inserir o Usuario ";
}
if (isset ($_POST ["acao"]) && $_POST["acao"] == "editar" ){
    
}

?>