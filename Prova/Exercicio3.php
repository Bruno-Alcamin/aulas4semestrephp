<?php
/*
3. (valor 2.5 pontos)
(Obrigat´orio uso de Heran¸ca) Um Cart˜ao de Cr´edito possui anuidade (valor em reais) e nome do cliente. Clientes
Regulares, Gold, Silver e Black possuem desconto de anuidade de 2%, 5%, 10% e 15% respectivamente. Em uma
parte de um sistema de Cart˜oes ´e necess´ario mostrar as informa¸c˜oes do cliente, sua categoria e o valor anual
gasto j´a com desconto (use o echo).
*/
abstract class CartaoCredito{
    protected $nome,$anuidade;
    
    public function __Construct($nome,$anuidade){
        $this->nome=$nome;
        $this->anuidade=$anuidade;
    }
    public abstract function informacoes();
    public abstract function desconto();
}
class Regulares extends CartaoCredito{
    public function desconto(){
        return $this->anuidade-(($this->anuidade*2)/100);
    }
    //Override
    public function informacoes(){
        echo "Nome: ".$this->nome."<br>";
        echo "Anuidade com desconto: ".$this->desconto()."<br>";
        echo "Tipo: Regular <br>";
    }
}
class Gold extends CartaoCredito{
    public function desconto(){
        return $this->anuidade-(($this->anuidade*5)/100);
    }
    //Override
    public function informacoes(){
        echo "Nome: ".$this->nome."<br>";
        echo "Anuidade com desconto: ".$this->desconto()."<br>";
        echo "Tipo: Gold <br>";
    }
}
class Silver extends CartaoCredito{
    public function desconto(){
        return $this->anuidade-(($this->anuidade*10)/100);
    }
    //Override
    public function informacoes(){
        echo "Nome: ".$this->nome."<br>";
        echo "Anuidade com desconto: ".$this->desconto()."<br>";
        echo "Tipo: Silver <br>";
    }
}
class Black extends CartaoCredito{
    public function desconto(){
        return $this->anuidade-(($this->anuidade*15)/100);
    }
    //Override
    public function informacoes(){
        echo "Nome: ".$this->nome."<br>";
        echo "Anuidade com desconto: ".$this->desconto()."<br>";
        echo "Tipo: Black <br>";
    }
}

$r=new Regulares("Gustavo",70);
$r->informacoes();
$g=new Gold("Bruno",70);
$g->informacoes();
?>