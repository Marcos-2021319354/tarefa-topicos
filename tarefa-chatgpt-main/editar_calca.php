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
    $novoNome = $_POST['novoNome'];
    $novoTamanho = $_POST['novoTamanho'];
    $novaCor = $_POST['novaCor'];

    // Atualiza o nome, tamanho e cor da calça com os novos valores
    $sql = "UPDATE calcas SET nome='$novoNome', tamanho='$novoTamanho', cor='$novaCor' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Calça atualizada com sucesso!";
    } else {
        echo "Erro ao atualizar a calça: " . $conn->error;
    }
}

?>