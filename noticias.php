<?php
include_once("conecta.php");
//Puxando o conecta
$sql = "SELECT * FROM noticias";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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

<div class="container">
<a class="btn btn-success" href="salvar_noticia.php" role="button">+ Cadastrar notícia</a>
</div>

<br>

<div class="container">
    <?php foreach ($conn->query($sql) as $dados) {  ?>

<div class="card">
  <div class="card-header">
   <?php echo $dados["titulo_noticia"]?>
  </div>
  <div class="card-body">
    <p class="card-text"><?php echo $dados["texto_noticia"]?></p>
    <a href="editar_noticia_form.php?id_noticia=<?php echo $dados['id_noticia'] ?>" class="btn btn-primary">Editar</a>
    <a href="deletar_noticia.php?id_noticia=<?php echo $dados['id_noticia'] ?>" class="btn btn-danger">Excluir</a>
  </div>
</div>
<br>

<?php } ?>
</div>
</body>
</html>