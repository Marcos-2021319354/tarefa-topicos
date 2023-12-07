<?php
session_start();

// Verifique se o formulário foi enviado via método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifique se os campos de usuário e senha foram enviados
    if (isset($_POST['email']) && isset($_POST['senha'])) {
        // Dados de conexão com o banco de dados (altere de acordo com suas configurações)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crud_chat";

        // Criar conexão com o banco de dados
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica se a conexão foi estabelecida com sucesso
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Obtém os dados do formulário
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Consulta SQL para verificar as credenciais na tabela 'pessoas'
        $sql = "SELECT * FROM pessoas WHERE email = '$email' AND senha = '$senha'";
        $result = $conn->query($sql);

        // Verifica se encontrou um registro correspondente
        if ($result->num_rows > 0) {
            // Inicia a sessão e redireciona para a página protegida
            $_SESSION['email'] = $email;
            header('Location: inicio.php');
            exit();
        } else {
            // Credenciais inválidas - redireciona de volta para o formulário de login
            header('Location: index.php');
            exit();
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
    }
}

// Redireciona de volta para o formulário de login se alguém tentar acessar este arquivo diretamente ou se os campos de usuário/senha não forem enviados
header('Location: index.php');
exit();
?>
