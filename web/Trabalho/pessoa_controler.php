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
      
    // Lógica para editar um usuário existente
      if (isset($_POST["id"]) && isset($_POST["nome"]) && isset($_POST["email"])) {
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        
        // Chama a função de edição
        editar_pessoa($id, $nome, $email);
        header("Location: listar.php");
        exit();
    }
}
 else {
echo "Erro: Ação não especificada.";
}
?>