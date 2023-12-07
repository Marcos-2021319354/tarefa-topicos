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
    $novoEmail = $_POST['novoEmail'];
    $novaSenha = $_POST['novaSenha'];

    // Atualiza o nome, Email e Senha da camiseta com os novos valores
    $sql = "UPDATE pessoas SET nome='$novoNome', email='$novoEmail', senha='$novaSenha' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Pessoa atualizada com sucesso!";
    } else {
        echo "Erro ao atualizar a pessoa: " . $conn->error;
    }
}

?>