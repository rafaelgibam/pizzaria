$(document).ready(function () {
    var totalgeral = 0;
    //var preco = parseFloat($('#preco').text());
    var precofrete = parseFloat($('#precofrete').val());

    $('#qtd').change(function() {
        totalgeral = (preco * this.value) + precofrete;

        $('#totallb').attr('value', totalgeral);
    });
});

