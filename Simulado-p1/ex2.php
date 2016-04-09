<?php
/*

2) Crie um formulario contendo os campos baseados na classe
acima e dois bot�es com valores (XML e JSON). Ao clicar em
XML, mostre o formato XML e em JSON o formato JSON.
OBS: Voc� deve usar a classe acima j� criada.

*/

class Produto {
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

$x = new Produto($_GET['nome'],$_GET['valor']);
$op = $_GET['method'];
switch($op){
    case 'XML':
        $x->toXML();
        break;
    case 'Json':
        $x->toJson();
        break;
}


?>