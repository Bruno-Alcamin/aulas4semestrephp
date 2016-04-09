<?php
class Ameba{
    public $nome;
    public function __construct($nome){
        $this->nome = $nome;
    }
    public function mostraNome(){
        echo $this->nome;
    }
    public function clona(){
        return  new Ameba($this->mostraNome()." Clone ");
    }
}
$c = new Ameba("Bruno");
$b = 0;
$v = [100];
for($b;$b<=$v;$b++){
    $v[$b] = $c->clona();
    $v[$b]->mostraNome()." $b";
}

?>