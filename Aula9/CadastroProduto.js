
$(function(){
    $('#form-mgs').submit(function(){
    var model = {"nome" : $('input[name="nome"]').val(),"valor" : $('input[name="valor"]').val()};
    $.ajax({
        type: 'POST',
        dataType: "json",
        cache: false,
        contentType:"application/json",    
        url: 'https://aulas-bruno-alcamin.c9users.io/produto',
        data: JSON.stringify(model),  
    }).done(function(e){
        var itens = "";
        itens+="<tr><td>";
        itens+=e.id;
        itens+="</td><td>";
        itens+="<span>"
        itens+=e.nome;
        itens+="</span>"
        itens+="</td><td>";
        itens+=e.valor;
        itens+="</td><td>";
        itens+="<button onclick='excluir("+e.id+")'>Excluir</button>";
        itens+="</td></tr>";
        $("#t1 tbody").append(itens);
    });
    
    $('input[name="nome"]').val(" ");
    $('input[name="valor"]').val(" ");
    return false;
    });
});

 

function listar(){
     var itens = "";
    $.ajax({
        type: 'GET',
        dataType: "json",
        cache: false,
        contentType:"application/json",    
        url: 'https://aulas-bruno-alcamin.c9users.io/listaProduto',
        beforeSend: function() {
            $("h2").html("Carregando....");
        },
        error: function() {
            $("h2").html("ERRO!");
        },
    }).done(function(e){
         for(var i = 0; i<e.length; i++){
            itens+="<tr><td>";
            itens+="<span id='cd'>"
            itens+=e[i].id;
            itens+="</span>"
            itens+="</td><td>";
            itens+="<span id='nm'>"
            itens+=e[i].nome;
            itens+="</span>"
            itens+="</td><td>";
            itens+="<span id='vl'>"
            itens+=e[i].valor;
            itens+="</span>"
            itens+="</td><td>";
            itens+="<button onclick='excluir("+e[i].id+")'>Excluir</button>";
            itens+="</td></tr>";
        }
        $("#t1 tbody").html(itens);
        $("h2").html("");
    });
}

function excluir(x){
    var model = {"id" : x};
     if(confirm("Confirma a exclusão do usuário "+$('button[onclick="excluir('+x+')"').parent().parent().find('span #cd').html()+"?")){
        $.ajax({
        type: 'DELETE',
        dataType: "json",
        cache: false,
        contentType:"application/json",    
        url: 'https://aulas-bruno-alcamin.c9users.io/deletarProduto',
        data: JSON.stringify(model),
        });
        $("#t1 tbody").html("");
        listar();
    }
}
