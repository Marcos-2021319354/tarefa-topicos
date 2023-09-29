<?php

include_once 'conecta.php';

$id_skin = $_GET['id_skin'];
$nome_skin = $_POST['nome_skin'];
$preco_skin = $_POST['preco_skin'];
$imagem_skin = $_POST['imagem_skin'];
$float_skin = $_POST['float_skin'];



$sql = "UPDATE `skin` SET `nome_skin` = '$nome_skin', `preco_skin` = '$preco_skin', `imagem_skin` = '$imagem_skin', `float_skin` = '$float_skin' 
WHERE `id_skin` = ".$id_skin;


$resultado = $conn -> query($sql);



if ($resultado)

{
	header('location: index.php');
} else {
	echo "Erro 421";
}


?>