# tarefa-chatgpt
Tarefa de Tópicos Emergentes em Informática
Rafael Carrazoni como Orelhudo0369 e Marcos Vinicius Dias Fan como Marcos-2021319354

Email e senha para entrar

Email: usuario@mail.com
Senha: 123

Comandos Chat - GPT:

1.Faça um crud utilizando javascript e ajax com mysql. Tema: Camiseta

2.Faça o editar e o deletar

3.Faltou a parte do listar

4.O editar só esta cadastrando um novo nome, eu quero que seja possível editar o tamanho e a cor também

5.Customize esse CRUD utilizando Bootstrap

6.customize essa tabela que está presente num arquivo de listar, usando bootstrap: 
if ($result->num_rows > 0) {
    // Exibe os dados em uma tabela (pode adaptar conforme a necessidade)
    echo "<table border='1'>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Tamanho</th>
              <th>Cor</th>
              <th>Editar</th>
              <th>Deletar</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['tamanho'] . "</td>";
        echo "<td>" . $row['cor'] . "</td>";
        echo "<td><button class='editar-camiseta' data-id='" . $row['id'] . "'>Editar</button></td>";
        echo "<td><button class='deletar-camiseta' data-id='" . $row['id'] . "'>Deletar</button></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Nenhuma camiseta encontrada.";
}

7.Faça uma tela inicial com três botões centralizados no meio da página, cada um leva para uma página diferente. O primeiro botão é Camisetas, o segundo é Calças e o terceiro é Pessoas. Utilize bootstrap 5

8.Faça um sistema de login utilizando sessão em php

9.faça o logout

10.Customize o formulário de login, utilizando bootstrap 5

11.Faça uma navbar com uma cor escura utilizando Bootstrap 5
