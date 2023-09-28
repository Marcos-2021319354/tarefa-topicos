<?php

require_once 'conecta.php';

$id_skin = $_GET["id_skin"];


$sql = "DELETE FROM skin WHERE id_skin=".$id_skin;
    
if(mysqli_query($conexao,$sql)) {

header('location: index.php');

$mensagem = "Deletado";

} else{
     $mensagem = "Erro ao deletar";
    }
mysqli_close($conexao);

?>