<?php
    if(isset($_POST['submit'])){



        
        /*
        print_r('Nome: ' . $_POST['nome']);
        print_r('<br>');
        print_r('Telefone: ' . $_POST['telefone']);
        print_r('<br>');
        print_r('Email: ' . $_POST['email']);
        print_r("<br>");
        print_r('Senha: ' . $_POST['senha']);
        print_r('<br>');
        print_r('ConfSenha: ' . $_POST['confsenha']);

        */

        include_once('config.php');

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confsenha = $_POST['confsenha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,telefone,email,senha) VALUES ('$nome','$telefone','$email','$senha')");

        header('location: login.php');

    }


?>
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
    </style>
    
</head>
<body>
    <div class="voltar">
    <a href="index5.php">Voltar</a>
    </div>
    
    <div id="logo-site2">
        <img src="imagens/logo.png">
    </div>
    <div id="corpo-form-cad">
        <h1>Cadastrar</h1>
        <form method="POST" action="criarconta.php">
            <input type="text" name="nome" id="nome" required placeholder="Nome Completo" maxlength="30">
            <input type="text" name="telefone" id="telefone" required placeholder="Telefone" maxlength="30">
            <input type="email" name="email" id="email" required placeholder="E-mail" maxlength="40">
            <input type="password" name="senha" id="senha" required placeholder="Senha" maxlength="15">
            <input type="password" name="confsenha" id="confsenha" required placeholder="Confirmar Senha" maxlength="15">
            <input class="inputSubmit" type="submit" name="submit" id="submit" value="Cadastrar"> 
            
        </form>
        <a href="login.php">J?? tem uma conta?<strong> Acesse agora</strong></a>
    </div>
</body>
</html>