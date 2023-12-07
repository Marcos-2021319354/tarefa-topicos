<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nav</title>
  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Personalização da Navbar */
    .navbar-custom {
      background-color: #333; /* Cor de fundo escura */
    }
    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-nav .nav-link {
      color: #fff; /* Cor do texto branco */
    }
    .navbar-custom .navbar-toggler {
      border-color: #fff; /* Cor do botão toggler (para dispositivos móveis) */
    }
    .navbar-custom .navbar-toggler-icon {
      background-color: #fff; /* Cor do ícone do botão toggler */
    }
  </style>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">
      <a class="navbar-brand" href="inicio.php">ÍNICIO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Scripts Bootstrap (requer jQuery) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
