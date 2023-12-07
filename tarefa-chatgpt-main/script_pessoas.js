$(document).ready(function() {
    // Adicionar pessoa
    $('#form').submit(function(event) {
      event.preventDefault();
      var nome = $('#nome').val();
      var senha = $('#senha').val();
      var email = $('#email').val();
  
      $.ajax({
        type: 'POST',
        url: 'adicionar_pessoa.php',
        data: { nome: nome, senha: senha, email: email },
        success: function(response) {
          alert(response);
          carregarPessoas();
        },
        error: function(error) {
          console.error('Erro:', error);
        }
      });
    });
  
    function carregarPessoas() {
      $.ajax({
        type: 'GET',
        url: 'listar_pessoas.php',
        success: function(response) {
          $('#pessoas-lista').html(response);
        },
        error: function(error) {
          console.error('Erro:', error);
        }
      });
    }
    
    carregarPessoas(); // Carrega a lista inicial de pessoas
    
    // Editar pessoa
    $(document).on('click', '.editar-pessoa', function() {
      var id = $(this).data('id');
      var novoNome = prompt('Insira o novo nome:');
      var novoEmail = prompt('Insira o novo email:');
      var novaSenha = prompt('Insira a nova senha:');
    
      $.ajax({
        type: 'POST',
        url: 'editar_pessoa.php',
        data: { id: id, novoNome: novoNome, novoEmail: novoEmail, novaSenha: novaSenha},
        success: function(response) {
          carregarPessoas(); // Atualiza a lista após a edição
        },
        error: function(error) {
          console.error('Erro:', error);
        }
      });
    });
  
    // Deletar pessoa
    $(document).on('click', '.deletar-pessoa', function() {
      var id = $(this).data('id');
      var confirmacao = confirm('Tem certeza de que deseja excluir esta pessoa?');
    
      if (confirmacao) {
        $.ajax({
          type: 'POST',
          url: 'excluir_pessoa.php',
          data: { id: id },
          success: function(response) {
            carregarPessoas(); // Atualiza a lista após a exclusão
          },
          error: function(error) {
            console.error('Erro:', error);
          }
        });
      }
    });
});