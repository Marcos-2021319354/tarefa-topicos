$(document).ready(function() {
    // Adicionar camiseta
    $('#form').submit(function(event) {
      event.preventDefault();
      var nome = $('#nome').val();
      var tamanho = $('#tamanho').val();
      var cor = $('#cor').val();
  
      $.ajax({
        type: 'POST',
        url: 'adicionar_camiseta.php',
        data: { nome: nome, tamanho: tamanho, cor: cor },
        success: function(response) {
          // Lógica após a adição da camiseta (exibir mensagem ou recarregar lista, etc.)
          alert(response);
          carregarCamisetas(); // Exemplo: Atualizar lista após adição
        },
        error: function(error) {
          console.error('Erro:', error);
        }
      });
    });
  });

  function carregarCamisetas() {
    $.ajax({
      type: 'GET',
      url: 'listar_camisetas.php',
      success: function(response) {
        $('#camisetas-lista').html(response);
      },
      error: function(error) {
        console.error('Erro:', error);
      }
    });
  }
  
  // Editar camiseta
  $(document).on('click', '.editar-camiseta', function() {
    var id = $(this).data('id');
    var novoNome = prompt('Insira o novo nome:');
    var novoTamanho = prompt('Insira o novo tamanho:');
    var novaCor = prompt('Insira a nova cor:');
  
    $.ajax({
      type: 'POST',
      url: 'editar_camiseta.php',
      data: { id: id, novoNome: novoNome, novoTamanho: novoTamanho, novaCor: novaCor },
      success: function(response) {
        carregarCamisetas(); // Atualiza a lista após a edição
      },
      error: function(error) {
        console.error('Erro:', error);
      }
    });
  });

  $(document).on('click', '.deletar-camiseta', function() {
    var id = $(this).data('id');
    var confirmacao = confirm('Tem certeza de que deseja excluir esta camiseta?');
  
    if (confirmacao) {
      $.ajax({
        type: 'POST',
        url: 'excluir_camiseta.php',
        data: { id: id },
        success: function(response) {
          carregarCamisetas(); // Atualiza a lista após a exclusão
        },
        error: function(error) {
          console.error('Erro:', error);
        }
      });
    }
  });