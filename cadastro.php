
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./css/cadastro.css">
    <script src="https://kit.fontawesome.com/e56cfcec1d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="form">
        <form action="cadastrar.php" method="POST">
            <h2 class="title">Cadastre-se!</h2>
            <label for="username">Nome</label>
            <div class="input">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <input id="username" name="username" placeholder="Username" type="text">
            </div>
            
            <label for="email">Email</label>
             <div class="input">
                <i class="fa-regular fa-envelope"></i>
                <input id="email" name="email" placeholder="Email" type="text">
            </div>
            
            <label for="senha">Senha</label>
            <div class="input">
                <i class="fa-solid fa-lock"></i>
                <input id="senha" type="password" name="senha" placeholder="Password" type="text">
            </div>
            
            <div id="btn">
                <button type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>