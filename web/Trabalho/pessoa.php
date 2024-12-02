<?php
include_once("database.php");
/* Insere usuarios no banco de dados */ 


function insere_usuario ($nome ,$email):void{
    $db = conectdb();
    $sql = "INSERT INTO usuarios(nome, email) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(1, $nome, PDO::PARAM_STR);
    $stmt->bindvalue(2, $email, PDO::PARAM_STR);
    
    

    try{
        $stmt-> execute();
        echo "- Usuario inserido -";
    }
    catch (PDOException $e){
        echo "- Erro ao inserir: - ". $e->getMessage();
    }
    $db = null;
    
}

function recupera_lista_usuario():void{

    $db = conectdb();
    $sql = "select * from usuarios";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $resultado = $stmt-> fetchAll(PDO::FETCH_ASSOC);
    var_dump($resultado);

}
recupera_lista_usuario();
?>