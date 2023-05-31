<?php  
session_start();

include "conexao.php";
$nome = $_POST['username'];
$sql = $pdo->prepare("SELECT * FROM usuarios WHERE `nome` = '$nome' ");
$sql->execute();
$usuarios = $sql->fetchAll();

if($sql->rowCount() != 0){
   $_SESSION['usuario'] = $usuarios;
    header ('Location: index.php');
 }else{
   $_SESSION['alerta'] = "Usuario Nao encontrado";
    header('Location: login.php');
   }

?>