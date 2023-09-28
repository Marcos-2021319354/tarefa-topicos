<?php
include_once("conecta.php");
//Puxando o conecta
$sql = "SELECT * FROM skin";
$resultado = mysqli_query($conexao,$sql);
//Puxando todas as skins
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
    <?php while ($dados = mysqli_fetch_assoc($resultado)) {  ?>
<div class="card" style="width: 18rem;">
  <img src="<?php echo $dados["imagem_skin"]?>" class="card-img-top" alt="<?php echo $dados["nome_skin"]?>">
  <div class="card-body">
    <h5 class="card-title"><?php echo $dados["nome_skin"]?></h5>
    <p class="card-text"><strong><?php echo $dados["preco_skin"]?></strong>
    <?php echo $dados["float_skin"]?></p>
    <a href="editar.php" class="btn btn-primary">Editar</a>
    <a href="deletar.php" class="btn btn-danger">Excluir</a>
  </div>
</div>
<?php } ?>
</body>
</html>