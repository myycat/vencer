<?php
Class usuario
{
    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
        try{
            $pdo = new PDO("mysql:bdname=".$nome.";host=".$host,$usuario,$senha);
        }catch(PDOException $e){
            $msg = $e-> getMessage();
        }
        
    }

public function cadastrar()
    {
        global $pdo;
    }

public function logar()
    {
        global $pdo;
    }

}


?>