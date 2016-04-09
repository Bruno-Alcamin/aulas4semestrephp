function listar(){
    $.ajax({
        type: 'POST',
        url: 'listar.php'
    }).done(function(e){
        $('.coment').append(e);
    });
}