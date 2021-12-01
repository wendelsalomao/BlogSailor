<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="logo"><h1>LogoMarca</h1></div>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
            <li><a href="index.php"><img src="./imagens/home.svg" alt=""></a></li>
            <li>
                <img src="./imagens/about.svg" alt="">
                <a href="#">Sobre</a>
            </li>
            <li>
                <img src="./imagens/account.svg" alt="">
                <p style="color:white";><?php echo $_SESSION['usuarioNome'];?></p>
            </li>
			<li>
                <a href="sair.php">Sair</a>
            </li>
            <div class="closeMenu"><i class="fa fa-times"></i></div>
            <span class="icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-github"></i>
            </span>
        </ul>
    </nav>
    <main>
        <div class="boasvindas">
            <h1>Seja Muito bem vindo</h1>
            <h3><?php echo $_SESSION['usuarioNome'];?></h3>
        </div>
    </main>
    <script src="./js/app.js"></script>
</body>
</html>
