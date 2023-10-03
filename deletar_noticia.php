<?php

require_once 'conecta.php';

$id_noticia = $_GET["id_noticia"];


$sql = "DELETE FROM noticias WHERE id_noticia=".$id_noticia;
    
if($conn -> query($sql)) {

header('location: noticias.php');

$mensagem = "Deletado";

} else{
     $mensagem = "Erro ao deletar";
    }

?>