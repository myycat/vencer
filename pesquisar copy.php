<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "projeto_vencer";
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $pesquisar = $_POST['pesquisar'];
    //echo $pesquisar;
    $result_cursos = "SELECT * FROM cursos WHERE nome LIKE '%$pesquisar%'LIMIT 5";
    $resultados_cursos = mysqli_query($conn, $result_cursos);

    while($rows_cursos = mysqli_fetch_array($resultados_cursos)){
        echo $rows_cursos['nome']."<br>";
    }
?>