<?php
/*/*
1) Crie a classe Produto. Esta classe possui dois atributos
nome e valor. Faca os m�todos toXML() e toJSON() que mostra
um Produto em formato JSON e XML respectivamente.

Exemplo:
a) XML:
<Produto>
   <nome> Lapis </nome>
   <valor> 1.50 </valor>
</Produto>
b) JSON: {nome : "Lapis", valor : 1.50 }
*/

class Produto{
    public $nome,$valor;
 
    public function __construct($nome,$valor){
        $this->nome = $nome;
        $this->valor = $valor;
    }

   
    public function toXML(){
        //Seta o response para enxergar XML
        header('content-type: text/xml');
        echo "<Produto><nome>". $this->nome ."</nome><valor>". $this->valor ."</valor></Produto>";
    }
    
    public function toJson(){
        header('content-type: application/json');
        echo json_encode($this);
    }

    
}

//curl --data "method=toJson&nome=papel&valor=10" https://aulas-bruno-alcamin.c9users.io/Simulado-p1/Exercicio2.php

$x = new Produto("Lapis",1.50);
//$x->toXML();
$x->toJson();

?>

