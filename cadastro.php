<?php
session_start();
include "conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>IconEmpresa</title>
    <link rel="shortcut icon" href="./img/titleimg.ico" >
</head>
<body>
    <div class="estrutura">
        <header>
            <h1>Sailor Tecnologia</h1>    
            <p>Já possui uma conta ?</p> 
            <button class="stylebutton"><a href="./login.php">Entrar</a></button>                            
        </header>
        <main>
                <h2>Criar conta</h2>
                <form class="formulario" action="processa.php" method="POST">
                    <input name="nome" type="text" placeholder="Nome">
                    <input name="#" type="text" placeholder="Sobre nome">
                    <input name="telefone" type="tel" placeholder="(xx) 1234-1234">
                    <input name="email" type="email" placeholder="fulano@exemplo.com">
                    <input name="senha" type="password" placeholder="Senha">
                    <input type="password" placeholder="Repita a senha">
                    <button class="stylebutton">Enviar</button>
                   
                   <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                     ?>
                </form>   
        </main>
    </div>    
</body>
</html>