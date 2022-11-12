<?php
session_start();
//print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: login.php');
}
$logado = $_SESSION['email'];



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!--Metatag responsável por chavear qual tabela de caracteres a página está utilizando -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VENCER - PONTOS</title>
  <link rel="stylesheet" href="css/estilosistema.css">
  <link rel="shortcut icon" href="./imagens/favicon.png" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <style>
    body {

      background: #DCDCDC;
    }
  </style>

</head>

<body>

  <header class="estilo2">
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger " aria-label="Eighth navbar example">
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
        <a href="sair.php" class="btn btn-dark me-5">Deslogar</a>
      </div>
    </nav>
    <br>


  </header>


  <br>

  <h3>PONTOS </h3>

  <div class="alert">
    <div class=".container">
      <div class="caixa-1">
        <img src="imagens/pontos.png"></a> 
         
      </div> 
      
           
    </div> 
     
    <div class="pts">
      <h4>Total de Pontos</h4> 
      <h2>650pts</h2> 
      </div>
      <br> 
      
</div>
<h4>Empresas contratando</h4>
<div class="alert alert-dark" role="alert">
<table class="table">
  <thead>
    <tr>
      
      
    </tr>
  </thead>
  <tbody>
    <tr>
    
    <td><img src="imagens/apple.png" alt="..." class="rounded"></td>
    <td><img src="imagens/coca-cola.png" alt="..." class="rounded"></td>
    <td><img src="imagens/petrobras.png" alt="..." class="rounded"></td>
    <td><img src="imagens/nubank.png" alt="..." class="rounded"></td>  
    <td><img src="imagens/adobe.png" alt="..." class="rounded"></td>
    <td><img src="imagens/vivo.png" alt="..." class="rounded"></td>

  </tbody>
</table>
     
    
      
  </div> 
   
  </div>
<div>
  
  </div>

  <h3>Últimos resultados</h3>

 
      <div class="caixa-22">
        <BR>
          <h4>Banco de Dados.......................150pts</h4>
          <h4>PHP..........................................150pts</h4>
          <h4>HTML.......................................150pts</h4>
          <h4>Lógica......................................150pts</h4>
          <h4>Algoritmo..................................150pts</h4>
          <h4>Delphi.......................................150pts</h4>
      </div> 
      <br>
   
  <div class="pontfinal">
      <a href="cursos.php" class="btn btn-primary me-5">Cursos</a>
  </div>
  <br>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>

</html>