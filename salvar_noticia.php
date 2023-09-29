<?php 
    include_once ("conecta.php");?>
<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Skin</title>
</head>
<body>
    <?php
    if (isset($_POST["titulo_noticia"])) {
    

        
        $titulo_noticia = $_POST["titulo_noticia"];
        $texto_noticia = $_POST["texto_noticia"];


        $sql = "INSERT INTO noticias(titulo_noticia,texto_noticia) VALUES(:titulo_noticia, :texto_noticia)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":titulo_noticia", $titulo_noticia, PDO::PARAM_STR);
        $stmt->bindParam(":texto_noticia", $texto_noticia, PDO::PARAM_STR);
        $stmt->execute();
        header('location: noticias.php');
    }
    ?>


    <h2>Adicionar Notícia</h2>
    <form method="post" enctype='multipart/form-data'>
        Título: <input type="text" name="titulo_noticia" required><br>
        Texto: <input type="text" name="texto_noticia"><br>
        <input type="submit" value="Adicionar notícia">
    </form>
</body>
</html>














