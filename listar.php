    <?php
        session_start();
        include_once("conexao.php");
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud - Listar</title>
</head>
<body>
    <h2>Listar usuários</h2>
    <br>
    <a href="index.php" style="text-decoration:none; color:blue;">Home</a>
    <br>
    <br>
    <br>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']); 
        }
    $select_usuarios = "select * from usuarios";
    $resultado_usu = mysqli_query($conn, $select_usuarios);
    while($row_usuario = mysqli_fetch_assoc($resultado_usu)){
        echo "ID: " . $row_usuario['id'] . '<br>';
        echo "NOME: " . $row_usuario['nome'] . '<br>';
        echo "Email: " . $row_usuario['email'] . '<br>';
        echo '<hr>';
    }
    ?>
</body>
</html>