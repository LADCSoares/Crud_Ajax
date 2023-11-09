<?php
 
include_once "conectar.php";
$conexao = conectar();

$sql= "SELECT * FROM cadeiras";
$resultado = mysqli_query($conexao,$sql);

if($resultado == TRUE){
    $cadeiras = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    echo json_encode($cadeiras);
}else{
        die ("Erro ao buscar os dados das cadeiras." . mysqli_errno($conexao) . ":" . mysqli_error($conexao));
}



?>