$('#delete-modal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('revistas');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Revista ');
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})