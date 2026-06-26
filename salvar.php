<?php

include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios(nome,email)
VALUES('$nome','$email')";

if($conexao->query($sql) === TRUE){

    echo "Cadastro realizado com sucesso!";

}else{

    echo "Erro: ".$conexao->error;

}

$conexao->close();

?>
