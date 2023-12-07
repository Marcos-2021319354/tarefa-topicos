<?php
// Conexão com o banco de dados (substitua as credenciais conforme necessário)
$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'crud_chat';

$conn = new mysqli($host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    // Deleta a camiseta com o ID fornecido
    $sql = "DELETE FROM camisetas WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Camiseta excluída com sucesso!";
    } else {
        echo "Erro ao excluir a camiseta: " . $conn->error;
    }
}

$conn->close();
?>