$(document).ready(function() {
    // Adicionar calça
    $('#form').submit(function(event) {
      event.preventDefault();
      var nome = $('#nome').val();
      var tamanho = $('#tamanho').val();
      var cor = $('#cor').val();
  
      $.ajax({
        type: 'POST',
        url: 'adicionar_calca.php',
        data: { nome: nome, tamanho: tamanho, cor: cor },
        success: function(response) {
          alert(response); // Exemplo: Atualizar lista após adição
          carregarCalcas();
        },
        error: function(error) {
          console.error('Erro:', error);
        }
      });
    });
  });
  
  function carregarCalcas() {
    $.ajax({
      type: 'GET',
      url: 'listar_calcas.php',
      success: function(response) {
        $('#calcas-lista').html(response);
      },
      error: function(error) {
        console.error('Erro:', error);
      }
    });
  }
  
  // Editar calça
  $(document).on('click', '.editar-calca', function() {
    var id = $(this).data('id');
    var novoNome = prompt('Insira o novo nome:');
    var novoTamanho = prompt('Insira o novo tamanho:');
    var novaCor = prompt('Insira a nova cor:');
  
    $.ajax({
      type: 'POST',
      url: 'editar_calca.php',
      data: { id: id, novoNome: novoNome, novoTamanho: novoTamanho, novaCor: novaCor },
      success: function(response) {
        carregarCalcas(); // Atualiza a lista após a edição
      },
      error: function(error) {
        console.error('Erro:', error);
      }
    });
  });
  
  $(document).on('click', '.deletar-calca', function() {
    var id = $(this).data('id');
    var confirmacao = confirm('Tem certeza de que deseja excluir esta calça?');
  
    if (confirmacao) {
      $.ajax({
        type: 'POST',
        url: 'excluir_calca.php',
        data: { id: id },
        success: function(response) {
          carregarCalcas(); // Atualiza a lista após a exclusão
        },
        error: function(error) {
          console.error('Erro:', error);
        }
      });
    }
  });
  