<?php 
    session_start();
    include "conexao.php";
    $email = $_POST['email'];
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE `email` = '$email' ");
    $sql->execute();
    $usuarios = $sql->fetchAll();


    if($sql->rowCount() != 0){
        // echo 'deu certo';
        $_SESSION['usuario'] = $usuarios;
        header ('Location: index.php');
     }else{
         $_SESSION['alerta'] = "Usuario não encontrado";
         header('Location: login.php');
         exit;
       }

?>