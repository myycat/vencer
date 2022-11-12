<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vencer</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="./imagens/favicon.png" type="image/x-icon" />
    
    <style>







        body{
            
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
            
            
        }
        @keyframes colors{
            0%{
                background-position: 0% 100%;
            }
            50%{
                background-position: 100% 50%;
            }
            100%{
                background-position: 0% 50%;
            }
        }
    </style>
    
</head>
<body>
    

    <div class="voltar">
    <a href="index5.php">Voltar</a>
    </div>
   
    <div id="logo-site">
        <img src="imagens/logo.png">
    </div>

    <div id="corpo-form">
        <h1>Entrar</h1>
        <form method="POST" action="testLogin.php">
            <input type="email" name="email" placeholder="Digite seu e-mail aqui">
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" name="submit" value="Acessar">
            <a href="criarconta.php">Ainda não é inscrito?<strong> Cadastre-se</strong></a>
        </form>
    </div>

    <?php



    ?>
</body>
</html>