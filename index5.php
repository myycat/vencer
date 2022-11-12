<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vencer</title>
    <link rel="stylesheet" href="css/estilo5.css">
    <link rel="stylesheet" href="css/default.css">
   
    
    <link rel="shortcut icon" href="./imagens/favicon.png" type="image/x-icon" />
    <style>
       /* body{
            
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
        }*/
    </style>
</head>
<body>
    <div id="logo-site4">
        <img src="imagens/logo.png">
    </div>
    <div id="corpo-form">
        <a href="login.php"><button>JÁ TENHO CONTA</button></a>
        <a href="criarconta.php"><button>CRIAR CONTA</button></a>
        <h2>^</h2>
        <submit class="btnOpen" onclick="openModal()">Conheça os benefícios</submit>
    </div>

    <div class="modal-container">
        <div class="modal">
        <h2>Conheça os benefícios</h2>
        <hr>
       
            <p>&#9733; Ganhar pontuação em cursos</p>
            <p>&#9733; Se qualificar para o mercado</p>
            <p>&#9733; Disputar vagas de emprego</p>
            <p>&#9733; Ter acesso a bolsas de estudo</p>
            <p>&#9733; Receber certificado</p>
            <p>&#9733; Ter acesso a milhares de cursos</p>
        <hr>

            <div clas="btns">      

                    <submit class="btnClose" onclick="closeModal()">Sair</submit>
            </div>
        
        </div>
        
    </div>
    
    


<script src="js/script.js"></script>

</body>
</html>
