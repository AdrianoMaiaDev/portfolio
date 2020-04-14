

$('#roda').submit(function(e) {
    
    e.preventDefault();
    

    if($('#inviar').val() == 'Enviando...') {
        return(false);
    }

    $('#inviar').val('Enviando...');

    $.ajax({
        url: 'enviar.php',
        type: 'post',
        data: {
            'metodo': $('#metodo').val(),
            'nome': $('#nome').val(),
            'email': $('#email').val()
        }
    }).done(function(data){
        
        alert(data);

        $('#inviar').val('Enviar dados');
        $('#metodo').val('');
        $('#nome').val('');
        $('#email').val('');

    });
});