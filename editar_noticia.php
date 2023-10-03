<?php

include_once 'conecta.php';

$id_noticia = $_GET['id_noticia'];
$titulo_noticia = $_POST['titulo_noticia'];
$texto_noticia = $_POST['texto_noticia'];


$sql = "UPDATE `noticias` SET `titulo_noticia` = '$titulo_noticia', `texto_noticia` = '$texto_noticia' WHERE `id_noticia` = ".$id_noticia;


$resultado = $conn -> query($sql);



if ($resultado)

{
	header('location: noticias.php');
} else {
	echo "Erro 421";
}



?>