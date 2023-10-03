<?php
require_once 'conecta.php';


$id_skin = $_GET['id_skin'];

$sql = "SELECT * FROM `skin` WHERE `id_skin` = $id_skin";
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
    <form action="editar_skin.php?id_skin= <?php echo $id_skin ?> "method="post" enctype="multipart/form-data"  class="container" style="width: 700px;">
    <label>Nome da Skin:
        <input type="text" id="nome_skin"  class="form-control" name="nome_skin" value="<?php echo $dados['nome_skin']; ?>"/>
    </label>
    <br>
    <label>Preço:
        <input type="text" id="preco_skin"  class="form-control" name="preco_skin" value="<?php echo $dados['preco_skin']; ?>"/>
    </label>
    <br>
    <label>Imagem da Skin:
        <img src="<?php echo $dados['imagem_skin']?>" alt="">
        <input type="file" id="imagem_skin"  class="form-control" name="imagem_skin" value=""/>
    </label>
    <br>
    <label>Float da Skin:
        <input type="text" class="form-control" id="float_skin" name="float_skin" value="<?php echo $dados['float_skin']; ?>"/>
    </label>
    <br>

    <input type="submit" class="btn btn-primary" value="Editar">

    </form>
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>