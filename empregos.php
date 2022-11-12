<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha'])==true))
    {
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
    <title>VENCER - EMPREGOS</title>
    <link rel="stylesheet" href="css/estilosistema3.css">
    <link rel="stylesheet" href="css/estilo6.css">
    <link rel="shortcut icon" href="./imagens/favicon.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <style>

    </style>
   
</head>
<body>

<header class="estilo1">
    <nav class="navbar navbar-expand-lg navbar-dark " aria-label="Eighth navbar example">
        <div class="container">
            <img src="imagens/logo.png"> 
      
        
        </button>

    
          
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
<div class="seta">
<a class="nav-link" href="sistema.php"><img src="imagens/seta-esquerda.png"></a> 
</div>

    <br>
<div class="msg1">
  
<h3>Conquiste sua vaga </h3>
</div>
<br>
<br>
<hr>

<div class="msg1">
<div>
  <img src="imagens/emprego.png"> 
  </div>
  <div class="vgs">
    <h3>Vagas de Emprego</h3>
  </div>
</div>
<div class="vgs2">
    <h3>Marque a empresa que deseja<br> se canditarà vaga de emprego: </h3>
  </div>

 
  <br>

  <fieldset class="radio-image">
    <label for="A">
        <input type="radio" name="empresa" id="N" value="M">
        <img src="imagens/coca-cola.png" alt="Coca Cola">
    </label>
    <label for="B">
        <input type="radio" name="empresa" id="A" value="F">
        <img src="imagens/vivo.png" alt="Vivo">
    </label>
    <label for="C">
        <input type="radio" name="empresa" id="C" value="F">
        <img src="imagens/petrobras.png" alt="Petrobras">
    </label>
    <label for="D">
        <input type="radio" name="empresa" id="C" value="F">
        <img src="imagens/nubank.png" alt="Nubank">
    </label>
    <label for="E">
        <input type="radio" name="empresa" id="C" value="F">
        <img src="imagens/apple.png" alt="Apple">
    </label>
    <label for="F">
        <input type="radio" name="empresa" id="C" value="F">
        <img src="imagens/adobe.png" alt="Adobe">
    </label>
   
</fieldset>
<br>
<br>

<div class="pontfinal">
  <a href="#" class="btn btn-primary me-5">CANDIDATAR</a>
  </div>
<br>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    
</body>
</html>