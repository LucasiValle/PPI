<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        table {
            width: 100%;
            border-collapse: collapse; /* Faz com que as bordas se juntem */
        }
        th, td {
            border: 1px solid black; /* Borda preta */
            
            text-align: center; /* Centraliza o texto */
            padding: 10px; /* Espaço interno nas células */
        }
        th {
            background-color: #f2f2f2; /* Cor de fundo das células de cabeçalho */
        }
        td {
            height: 50px; /* Altura fixa para as células */
        }
    </style>
<body>
   
<?php   
include_once("database.php");
include_once("pessoa.php");

$lista_pessoa=getUsuarios();
?>


<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>email</th>
    </tr>
    <?php  for($i = 0;$i< count($lista_pessoa);$i++){?>
    
    <tr>
        <td> <a href="edit_pessoa.php?pessoa_id=<?php  echo $lista_pessoa[$i]["id"]?>"><?php  echo $lista_pessoa[$i]["id"]?></a></td>
        <td><?php  echo $lista_pessoa[$i]["nome"]?></td>
        <td><?php  echo $lista_pessoa[$i]["email"]?></td>
    </tr>
      <?php }?>
   

</table>
</body>
</html>