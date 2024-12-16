<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100lvh;
        }
        fieldset{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <fieldset>
        <?php
            if (!isset($_GET["erro"]) || ($_GET["erro"])==1){
                ?>
                <h2>Usuario nao logado</h2>
        <?php
            }

        ?>
        <form action="autenticação.php" method="post">
            <label for="login">Login</label>
        <input type="text" name="login" id="login">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">

        <input type="submit" value="Entrar">

        </form>
    </fieldset>
    
</body>
</html>