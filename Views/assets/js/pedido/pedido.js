var total;

$('#qtd').change(function() {
  //console.log($('#qtd').val() * $('#preco').val());
  total = $('#qtd').val() * $('#preco p').val();
  $('#total').attr('value', total);
});
