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

// Verifica se os dados foram recebidos corretamente
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $tamanho = $_POST['tamanho'];
    $cor = $_POST['cor'];

    // Insere a nova camiseta na tabela do banco de dados
    $sql = "INSERT INTO camisetas (nome, tamanho, cor) VALUES ('$nome', '$tamanho', '$cor')";
    if ($conn->query($sql) === TRUE) {
        echo "Camiseta adicionada com sucesso!";
    } else {
        echo "Erro ao adicionar a camiseta: " . $conn->error;
    }
}


?>