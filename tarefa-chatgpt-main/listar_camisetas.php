<?php

include ('adicionar_camiseta.php');
// ... (código de conexão ao banco de dados, semelhante ao anterior) ...

// Lista todas as camisetas do banco de dados
$sql = "SELECT * FROM camisetas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="table-responsive">';
    echo '<table class="table table-striped table-hover">';
    echo '<thead class="table-dark">';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Nome</th>';
    echo '<th>Tamanho</th>';
    echo '<th>Cor</th>';
    echo '<th>Editar</th>';
    echo '<th>Deletar</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['nome'] . '</td>';
        echo '<td>' . $row['tamanho'] . '</td>';
        echo '<td>' . $row['cor'] . '</td>';
        echo '<td><button class="btn btn-primary editar-camiseta" data-id="' . $row['id'] . '">Editar</button></td>';
        echo '<td><button class="btn btn-danger deletar-camiseta" data-id="' . $row['id'] . '">Deletar</button></td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
} else {
    echo "<div class='alert alert-info'>Nenhuma camiseta encontrada.</div>";
}

$conn->close();
?>
