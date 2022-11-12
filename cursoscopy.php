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

<h3>Pesquisar por um curso: </h3>






<div class="m-5">
    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>

          <th scopt="col">DESCRICAO</th>
          <th scopt="col">CURSO</th>
          <th scope="col">DURAÇÃO</th>
          <th scope="col">CADASTRADO</th>
          <th scope="col">NIVEL</th>
         
                   
          
        </tr>
      </thead>
      <tbody>
        <?php
          while($user_data = mysqli_fetch_assoc($result))
          {
            echo "<tr>";
            echo "<td>".$user_data['id_curso']."</td>";
            echo "<td>".$user_data['descricao']."</td>";
            echo "<td>".$user_data['nome']."</td>";
            echo "<td>".$user_data['duracao']."</td>";
            echo "<td>".$user_data['tempo']."</td>";
            echo "<td>".$user_data['nivel']."</td>";
            
            
           
            
           



          }

          
        ?>
        </tbody>
    </table>
</div>












<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    
</body>
</html>