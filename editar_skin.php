<?php

include_once 'conecta.php';

$id_skin = $_GET['id_skin'];
$nome_skin = $_POST['nome_skin'];
$preco_skin = $_POST['preco_skin'];
$float_skin = $_POST['float_skin'];
//Imagem
$imagem_skin = $_FILES['imagem_skin']['name'];
$imagem_skin_tmp = $_FILES['imagem_skin']['tmp_name'];
if (isset($_FILES['imagem_skin']['name'][0]) and !empty($_FILES['imagem_skin']['name'][0])) {


$sql = "UPDATE `skin` SET `nome_skin` = '$nome_skin', `preco_skin` = '$preco_skin', `imagem_skin` = '$imagem_skin', `float_skin` = '$float_skin' 
WHERE `id_skin` = ".$id_skin;


$resultado = $conn -> query($sql);



if ($resultado)

{
	header('location: index.php');
} else {
	echo "Erro 421";
}
} else {
	$sql = "UPDATE `skin` SET `nome_skin` = '$nome_skin', `preco_skin` = '$preco_skin', `float_skin` = '$float_skin' 
WHERE `id_skin` = ".$id_skin;


$resultado = $conn -> query($sql);



if ($resultado)

{
	header('location: index.php');
} else {
	echo "Erro 421";
}
}

?>