<?php
    session_start();
    include_once("conexao.php");
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    // echo "Nome: $nome <br>";
    // echo "Email: $email <br>";

   $sql_user =  "insert into usuarios (nome, email, criado) values ('$nome', '$email', NOW())";
   $result = mysqli_query($conn, $sql_user);

   if(mysqli_insert_id($conn)){
       $_SESSION['msg'] = "<p style='color:blue;'>Usuário cadastrado com sucesso!</p>";
        header("Location:index.php");
   }else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso!</p>";
    header("Location:index.php");
   }
