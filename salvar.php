<?php
///echo json_encode("Salvou");

include "conectar.php";
$conexao = conectar();
//pega os dados cru da entrada do PHP 
$cadeira = json_decode(file_get_contents("php://input"));
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $sql = "INSERT INTO cadeiras (material, modelo, preço, cor) VALUES ('$cadeira->material', '$cadeira->modelo', '$cadeira->preço', '$cadeira->cor')";

    $resultado = mysqli_query($conexao, $sql);

    if ($resultado == TRUE) {
        $cadeira->id = mysqli_insert_id($conexao);
        //Converte o objeto pessoa em uma string no formato JSON
        echo json_encode($cadeira);
    } else {
        die("Erro ao inserir a cadeira no banco de dada " .
            mysqli_error($conexao) . ":" . mysqli_error($conexao));
    }
} else if ($_SERVER['REQUEST_METHOD'] == "PUT") { //EDITAR
    $sql = "UPDATE cadeiras SET material='$cadeira->material', modelo='$cadeira->modelo', preço='$cadeira->preço', cor='$cadeira->cor' WHERE  id=$cadeira->id";

    $resultado = mysqli_query($conexao, $sql);

    if ($resultado == TRUE) {
        //Converte o objeto cadeira em uma string no formato JSON
        echo json_encode($cadeira);
    } else {
        die("Erro ao inserir a cadeira no banco de dados" . mysqli_error($conexao));
    }
}

?>