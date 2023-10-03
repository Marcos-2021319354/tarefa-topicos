<?php
include_once("conecta.php");
//Puxando o conecta
$sql = "SELECT * FROM skin";
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
<a class="btn btn-success" href="salvar.php" role="button">+ Cadastrar skin</a>

<br>
<br>
    <?php foreach ($conn->query($sql) as $dados) {  ?>
<div class="card d-inline-block" style="width: 18rem; margin-left:">
  <img src="<?php echo $dados["imagem_skin"]?>" class="card-img-top" alt="<?php echo $dados["nome_skin"]?>" style="max-height: 14em; height:500px;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $dados["nome_skin"]?></h5>
    <p class="card-text"><strong>R$<?php echo $dados["preco_skin"]?></strong>
    <?php echo $dados["float_skin"]?></p>
    <a href="editar.php?id_skin=<?php echo $dados['id_skin'] ?>" class="btn btn-primary">Editar</a>
    <a href="deletar.php?id_skin=<?php echo $dados['id_skin'] ?>" class="btn btn-danger">Excluir</a>
  </div>
</div>
<?php } ?>
</div>
</body>
</html>