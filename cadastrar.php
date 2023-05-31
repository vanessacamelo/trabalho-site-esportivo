<?php  
    include "conexao.php";

    $nome = $_POST['username'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = $pdo->prepare("INSERT INTO `usuarios`(`nome`,`email`,`senha`) VALUES('$nome','$email','$senha')");
    $sql->execute();

    header("Location: login.php");
?>