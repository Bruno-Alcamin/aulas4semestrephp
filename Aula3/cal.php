<?php
class Calculadora{
    public $n1,$n2;    
    
    public function __construct($n1,$n2){
        $this->n1 = $n1;
        $this->n2 = $n2;
    }
    
    public function soma(){
        return $this->n1+$this->n2;
    }
}

$c = new Calculadora(1,2);
echo $c->soma();


?>