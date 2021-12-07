<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Blog Sailor</title>
</head>
<body>
    <nav>
        <div class="logo"><h1>Blog Sailor</h1></div>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
            <li>
                <img src="./imagens/logar.svg">
                <a href="cadastro.php">Cadastrar</a></li>
            <li>
                <img src="./imagens/account.svg">
                <a href="login.php">Entrar</a></li>
            <div class="closeMenu"><i class="fa fa-times"></i></div>
            <span class="icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-github"></i>
            </span>
        </ul>
    </nav>
    <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img class="imgcarrosel" src="./imagens/slide1.jpg" style="width:100%">
          <div class="text">Noticias </div>
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        
    </div>
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
    </div>        
    <footer>
      <div class="footer-container">
        <ul>
          <h2>Blog Sailor</h2>
          <li>Noticias e conteudos incriveis todos os dias.</li>
        </ul>
      </div>
    </footer>
    <script src="./js/carrosel.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>