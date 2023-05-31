<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
    <script src="https://kit.fontawesome.com/e56cfcec1d.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php  
    session_start();
    ?>
    <div id="form">
        <form action="testeLogin.php" method="POST">
            <h2 class="title">Faça o seu login, torcedor!</h2>

            <?php 
              if(!empty($_SESSION['alerta'])){
            
            ?>    
              <div style="color: red">
                USUÁRIO NÃO ENCONTRADO <br>
                <style type="text/css">
                    body{
                        text-align: center;
                    }
                    
                </style>
                </div>
            <?php
                session_destroy();  
            }
            ?>

            <label for="username">Nome</label>
            <div class="input">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <input id="username" name="username" placeholder="Username" type="text">
            </div>
            
            <label for="senha">Senha</label>
            <div class="input">
                <i class="fa-solid fa-lock"></i>
                <input id="senha" type="password" name="senha" placeholder="Password" type="text">
            </div>

            <div id="btn">
                <button type="submit">Entrar</button><br><br>
                <p class="cad"><a href="cadastro.php" >Cadastre-se</a></p>
            </div>
            

    </form>
    </div>
    
</body>
</html>
