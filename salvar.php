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
<br>
<br>
    <?php
    if (isset($_POST["nome_skin"])) {
    

        
        $nome_skin = $_POST["nome_skin"];
        $preco_skin = $_POST["preco_skin"];
        $imagem_skin = $_FILES['imagem_skin']['name'];
        $imagem_skin_tmp = $_FILES['imagem_skin']['tmp_name'];
        
        $float_skin = $_POST["float_skin"];

        $sql = "INSERT INTO skin(nome_skin,preco_skin,imagem_skin,float_skin) VALUES(:nome_skin, :preco_skin,:imagem_skin, :float_skin)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":nome_skin", $nome_skin, PDO::PARAM_STR);
        $stmt->bindParam(":preco_skin", $preco_skin, PDO::PARAM_STR);
        $stmt->bindParam(":imagem_skin", $imagem_skin, PDO::PARAM_STR);
        $stmt->bindParam(":float_skin", $float_skin, PDO::PARAM_STR);
        $stmt->execute();
        header('location: index.php');
    }
    ?>


<h2 class="container">Adicionar Skin</h2>
 
 <form method="post" enctype='multipart/form-data' class="container" style="width: 700px;">
<div class="mb-3">
 <label for="exampleInputEmail1" class="form-label">Nome da skin:</label>
 <input type="text" class="form-control"  name= "nome_skin"aria-describedby="emailHelp">
 
</div>
<div class="mb-3">
 <label for="exampleInputEmail1" class="form-label">Preço da Skin:</label>
 <input type="text" class="form-control"  name= "preco_skin"aria-describedby="emailHelp">

</div>
<div class="mb-3">
 <label for="exampleInputEmail1" class="form-label">Imagem da Skin:</label>
 <input type="file" class="form-control"  name= "imagem_skin"aria-describedby="emailHelp">

</div>
<div class="mb-3">
 <label for="exampleInputEmail1" class="form-label">Float da Skin:</label>
 <input type="text" class="form-control"  name= "float_skin" aria-describedby="emailHelp">

</div>

<input type="submit" class="btn btn-success" value="Adicionar Skin">

</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>












