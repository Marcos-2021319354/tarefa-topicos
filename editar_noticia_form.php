<?php
require_once 'conecta.php';


$id_noticia = $_GET['id_noticia'];

$sql = "SELECT * FROM `noticias` WHERE `id_noticia` = $id_noticia";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Xango Skins</title>
</head>
<body>
<?php foreach ($conn->query($sql) as $dados) { ?>
    <form action="editar_noticia.php?id_noticia= <?php echo $id_noticia ?> "method="post" enctype="multipart/form-data">
    <label>Título da noticia:
        <input type="text" id="titulo_noticia" name="titulo_noticia" value="<?php echo $dados['titulo_noticia']; ?>"/>
    </label>
    <br>
    <label>Texto da noticia:
        <input type="text" id="texto_noticia" name="texto_noticia" value="<?php echo $dados['texto_noticia']; ?>"/>
    </label>
    <br>

    <input type="submit" value="Editar">

    </form>
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>