function excluir(x){
    if(confirm("Confirma a exclusão do usuário "+$('button[onclick="excluir('+x+')"').parent().find('span').html()+"?")){
        $.ajax({
            type: 'POST',
            url: 'excluir.php',
            data:{
                cod: x
            }
        });
        $('.coment').load('listar.php');
        //location.reload();              
    }
}