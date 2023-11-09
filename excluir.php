<?php
include_once "conectar.php";
$conexao = conectar();

$id = $_GET['id'];

$sql = "DELETE FROM cadeiras WHERE id=$id";
$resultado = mysqli_query($conexao,$sql);
    if($resultado == TRUE){
        echo '{"id":"' . $id . '"}';
    }else{
        die("Erro ao deletar a cadeira." . mysqli_errno($conexao) . ":" . mysqli_error($conexao));
    }




?>