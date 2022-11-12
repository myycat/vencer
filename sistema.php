<?php
    session_start();
    include_once('config.php');

    //print_r($_SESSION);
    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      header('Location: login.php');
    }
    $logado = $_SESSION['email'];


   // print_r($result);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!--Metatag responsável por chavear qual tabela de caracteres a página está utilizando -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VENCER - SENAC</title>
  <link rel="stylesheet" href="css/estilosistema.css">
  <link rel="stylesheet" href="css/default.css">
  <link rel="shortcut icon" href="./imagens/favicon.png" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
      <div class="container">
        <img src="imagens/logo.png">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
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
    
    <?php
       
        echo "<font color='#FFFFFF'><h5>Olá, <u>$logado</u></h5></font>";
    ?>

  </header>

  <br>


  <h3>Total de Pontos: </h3>
  <h3>450pts </h3>


  <div class="row">
    <div class="col-sm-4 bg-light mb-3">
      <div class="card">
        <div class="card-body bg-light mb-3">
          <a href="cursos.php"><img src="imagens/curso-online.png"></a>
          <h5 class="card-title">Cursos</h5>

        </div>
      </div>
    </div>
    <div class="col-sm-4 bg-light mb-3">
      <div class="card">
        <div class="card-body bg-light mb-3">
          <a href="empregos.php"><img src="imagens/emprego.png"></a>
          <h5 class="card-title">Empregos</h5>

        </div>
      </div>
    </div>
    <div class="col-sm-4 bg-light mb-3">
      <div class="card">
        <div class="card-body bg-light mb-3">
          <a href="pontos.php"><img src="imagens/pontos.png"></a>
          <h5 class="card-title">Pontos</h5>

        </div>
      </div>
    </div>
  </div>



  <br><br>




  <div class="card border-dark mb-32">
    <div class="card-header">Empresas Contratando</div>
    <div class="card-body32">
      <img src="imagens/coca-cola.png" alt="..." class="rounded-circle">
      <img src="imagens/vivo.png" alt="..." class="rounded-circle">
      <img src="imagens/petrobras.png" alt="..." class="rounded-circle">
      <img src="imagens/nubank.png" alt="..." class="rounded-circle">
      <img src="imagens/apple.png" alt="..." class="rounded-circle">
      <img src="imagens/adobe.png" alt="..." class="rounded-circle">
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>

</html>