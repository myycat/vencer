<?php
    session_start();
    include_once('config.php');

    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha'])==true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');

    }
    $logado = $_SESSION['email'];

    $sql = "SELECT * FROM cursos ORDER BY id_curso DESC";

    $result = $conexao->query($sql);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--Metatag responsável por chavear qual tabela de caracteres a página está utilizando -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VENCER - CURSOS</title>
    <link rel="stylesheet" href="css/estilosistema.css">
    <link rel="stylesheet" href="css/cursos.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/reset.min.css">
    <link rel="shortcut icon" href="./imagens/favicon.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--
    <style>
        body{
            
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
        }
    </style>
    -->
</head>
<body>

<header class="estilo0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" aria-label="Eighth navbar example">
        <div class="container">
            <img src="imagens/logo.png"> 
      
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="sistema.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cursos.php">Cursos</a>
          </li>   
          <li class="nav-item">
            <a class="nav-link" href="empregos.php">Empregos</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link" href="pontos.php">Pontos</a>
          </li>      
          
            </ul>
          </li>
        </ul>
        
      </div>
    </div>
    <div class="d-flex">
        <a href="sair.php" class="btn btn-danger me-5">Deslogar</a>
      </div>
  </nav>
    <br>
  

</header>


    <br>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">




    <div class="pesq1">
<form method="POST" action="pesquisar.php">
  <input type="text" name="pesquisar" placeholder="Pesquisar">
  <input type="submit" value="BUSCAR">
</form>

</div>

<br>

<div class="col">
        <div class="h-100 p-5 bg-light border rounded-6">
        <div class="col-auto d-lg-flex">
        <img src="imagens/excel.png">
        <a class="nav-link" href="excel.php"><h2>Curso de Excel</h2></a>         
        </div>
      </div>
    </div>
    
    <br>

    <div class="col">
        <div class="h-100 p-5 bg-light border rounded-6">
        <div class="col-auto d-lg-flex">
        <img src="imagens/logica.png">
        <a class="nav-link" href="logica.php"><h2>Curso de Lógica</h2>         
        </div>
      </div>
    </div>

    <br>

    <div class="col">
        <div class="h-100 p-5 bg-light border rounded-6">
        <div class="col-auto d-lg-flex">
        <img src="imagens/php.png">
        <a class="nav-link" href="php.php"><h2>Curso de PHP</h2>         
        </div>
      </div>
    </div>

    
    <br>

    <div class="col">
        <div class="h-100 p-5 bg-light border rounded-6">
        <div class="col-auto d-lg-flex">
        <img src="imagens/delphi.png">
        <a class="nav-link" href="delphi.php"><h2>Curso de Delphi</h2>         
        </div>
      </div>
    </div>
<br>










<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    
</body>
</html>