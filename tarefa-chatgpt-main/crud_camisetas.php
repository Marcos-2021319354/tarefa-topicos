<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
}

// Se o usuário estiver autenticado, exibe a página protegida
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CRUD de Camisetas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php require_once "navbar.php" ?>
  <div class="container mt-5">
    <h1 class="text-center">CRUD de Camisetas</h1>

    <form id="form" class="mb-4">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control">
      </div>

      <div class="mb-3">
        <label for="tamanho" class="form-label">Tamanho:</label>
        <input type="text" id="tamanho" name="tamanho" class="form-control">
      </div>

      <div class="mb-3">
        <label for="cor" class="form-label">Cor:</label>
        <input type="text" id="cor" name="cor" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary">Adicionar Camiseta</button>
    </form>

    <div id="camisetas-lista" class="table-responsive">
    <?php require_once "listar_camisetas.php"; ?>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>