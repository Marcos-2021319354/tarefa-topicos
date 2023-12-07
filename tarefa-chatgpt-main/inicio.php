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
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <!-- Adicione o link do Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para centralizar os botões */
        .btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <?php require_once "navbar.php" ?>

    <div class="container">
        <div class="btn-container">
            <!-- Botões -->
            <a href="crud_camisetas.php" class="btn btn-primary btn-lg me-3">Camisetas</a>
            <a href="crud_calcas.php" class="btn btn-secondary btn-lg me-3">Calças</a>
            <a href="crud_pessoas.php" class="btn btn-success btn-lg">Pessoas</a>
        </div>
    </div>

    <!-- Adicione o link do Bootstrap JS (opcional, mas útil para funcionalidades do Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
