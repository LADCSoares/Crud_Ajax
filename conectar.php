<?php

function conectar(){

    $host = "localhost";
    $user = "root";
    $pass= "";
    $db = "cadeira";
    
    $conexao= mysqli_connect($host,$user,$pass,$db);
    
    if($conexao){
        return $conexao;
    } else{
        die("Problemas ao conectar no banco de dados. Erro;" . mysqli_connect_errno()."".mysqli_connect_error());
    }
    
    }
    

?>