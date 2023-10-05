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
<nav class="navbar bg-primary" data-bs-theme="dark">
<div class="container-fluid">
    <a class="navbar-brand" href="index.php">Xango Skins</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="noticias.php">Notícias</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<?php foreach ($conn->query($sql) as $dados) { ?>
    <form action="editar_noticia.php?id_noticia= <?php echo $id_noticia ?> "method="post" enctype="multipart/form-data" class="container" style="width: 700px;">

    <div class="mb-3">
    <label  class="form-label">Título:</label>
    <input type="text" class="form-control"  name="titulo_noticia" aria-describedby="emailHelp" value="<?php echo $dados['titulo_noticia']; ?>" required>

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Texto:</label>

      <label for="" class="form-label"></label>
      <textarea class="form-control" name="texto_noticia" id="texto_noticia" rows="3"><?php echo $dados['texto_noticia']; ?></textarea>
    </div>
    

    <input type="submit" class="btn btn-primary" value="Editar">

    </form>
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>