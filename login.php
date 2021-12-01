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
            <h1>EmpresaLogo</h1>                      
            <p>Não possui uma conta ?</p> 
            <button class="stylebutton"><a href="./cadastro.php">Criar conta</a></button>                            
        </header>
        <main>
                <h2>Login in</h2>
                <form class="formulario" action="valida.php" method="POST">
                    <input name="email" type="email" placeholder="fulano@exemplo.com">
                    <input name="senha" type="password" placeholder="password">
                    <button class="stylebutton">Entrar</button>

            <p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
		<p class="text-center text-success">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
                </form>   
        </main>
    </div>    
</body>
</html>