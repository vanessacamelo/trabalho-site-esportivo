<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet"/>
    <title>Página Esportiva Pernambucana</title>
</head>
<body>

<?php session_start(); ?>
<?php     
    if(!isset($_SESSION['usuario'])) {
        header("Location: login.php");
} 
?>

<section class="main">
<header>
    <div class="center menu-container">
        <div class="logo">  
        <h3><i class="fa-regular fa-futbol"></i>  P.E.P</h3>
        </div>

        <div class="menu">
            <a class="active-menu" target="_blank" href="">Home</a>
            <a href="cadastro.php" target="_blank">Cadastro</a>
           <!-- <a href="cadastro.php">Cadastro</a> -->
            <a href="login.php" target="_blank">Login</a>
            <a href=""><i class="fa-solid fa-user"></i>   Bem-vindo, <?= $_SESSION['usuario'][0]['nome'] ?></a>
            <a href="deslogar.php">Sair</a>
        </div>

    </div><!--center-->
</header>

<div id="fotos-times">
    <a href="https://sportrecife.com.br/" target="_blank"><img src="img/sportRecife.png" alt="SportRecife" width="20%" height="50%"></a>
    <a href="http://www.santacruzpe.com.br/" target="_blank"><img src="img/santaCruz.png" alt="SantaCruz" width="20%" height="50%"></a>
    <a href="https://www.nautico-pe.com.br/" target="_blank"><img src="img/nautico.png" alt="Nautico" width="20%" height="50%"></a>
    <a href="https://retrofcbrasil.com.br/" target="_blank"><img src="img/retro.png" alt="Retro" width="18%" height="40%"></a>
</div>

<div class="text-chamada"><h1>Página Esportiva Pernambucana</h1><h4>Informações sobre os principais times da capital pernambucana.</h4></div>
</section>

<br><br><br><br>

<section class="noticias-1">
    <div class="center">
        <div class="noticias-wraper-1">
            <div class="noticia-destaque">
                <div style="background-image: url('https://sportrecife.com.br/wp-content/uploads/2022/02/Treino-Sport-09.02.2022-067.jpg');" class="noticia-destaque-single">
                    <h3 style="color: white;">Sport realiza último treino para a final contra o Ceará</h3>
                </div>
            </div>
                <div class="outras-noticias-1">
                    <div style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrhwR4LCU_fcF017uObfjuTbBSM0p5kqkEOZ49SSwh5kgECYt87ycpQtBQNTGpbubPq0Y&usqp=CAU'); font-size: small;" class="outra-noticia-1-single">
                        <h3>Notícias do Náutico</h3>
                    </div>
                    <div style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRm9ryaH89JydXNqtdc-MyaIcozk16vw6QNQQ&usqp=CAU'); font-size: small;" class="outra-noticia-1-single">
                        <h3>Notícias do Santa Cruz</h3>
                    </div>
                    <div style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyME0z6oJE_52ji9q9ENsnKFaFjtmje2wOpw&usqp=CAU'); font-size: small;" class="outra-noticia-1-single">
                        <h3>Notícias do Retrô</h3>
                    </div>
                    <div style="background-image: url('./img/torcedor.jpg'); font-size: small;" class="outra-noticia-1-single">
                        <h3>Galeria do torcedor</h3>
                    </div>
                </div>
        </div>
    </div>
</section>

<div id="share">
    <a class="instagram" href="#" target="_blank">
        <i class="fa-brands fa-instagram"></i>
    </a>

    <a class="twitter" href="#" target="_blank">
        <i class="fa-brands fa-twitter"></i>
    </a>

    <a class="tiktok" href="#" target="_blank">
        <i class="fa-brands fa-tiktok"></i>
    </a>
</div>

<footer>
    Copyright © 2023  - Página Esportiva Pernambucana - Vanessa Camelo
</footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"></script>
</body>
</html>
