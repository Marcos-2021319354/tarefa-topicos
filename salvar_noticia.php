<?php 
    include_once ("conecta.php");?>
<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Skin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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



<br>
    <br>
    <form method="post" enctype='multipart/form-data' class="container" style="width: 700px;">
  <div class="mb-3">
    <label  class="form-label">Título:</label>
    <input type="text" class="form-control"  name="titulo_noticia" aria-describedby="emailHelp" required>

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Texto:</label>

      <label for="" class="form-label"></label>
      <textarea class="form-control" name="texto_noticia" id="texto_noticia" rows="3"></textarea>
    </div>

 
  <input type="submit" class="btn btn-success" value="Adicionar notícia">

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>














