function listar(){
    $.ajax({
        type: 'POST',
        url: 'models/listar.php'
    }).done(function(e){
        $('.coment').append(e);
    });
}