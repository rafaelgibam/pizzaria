var total;

$('#qtd').change(function() {
  total = $('#qtd').val() * $('#preco').val();
  $('#totallb').attr('value', total);
});
