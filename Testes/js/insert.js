$(main);
function main(){
    $('#form-mgs').submit(function(){
    $.ajax({
        type: 'POST',
        url: 'insert.php',
        data:{
            nome: $('input[name="nome"]').val()    
        }
    }).done(function(e){
        $('.coment').append(e);
    });
    $('input[name="nome"]').val(" ");
    return false;
    });
}
            