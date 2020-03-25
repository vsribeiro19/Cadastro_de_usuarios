<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>
    <h2>Cadastrar usuário</h2>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <form method="POST" action="processa.php">
        <label>Nome: </label>
        <br>
        <input type="text" name="nome" placeholder="Digite o nome completo">
        <br>
        <br>
        <label>E-mail: </label>
        <br>
        <input type="text" name="email" placeholder="Digite o seu e-mail">
        <br>
        <br>
        <br>
        <input type="submit" value="Cadastrar">
        <br>
        <br>
        <br>
        <a href="listar.php" style="text-decoration:none; color:blue;">Listar usuários cadastrados</a>
    </form>
</body>
</html>