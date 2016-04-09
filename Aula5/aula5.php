<?php
/*
Herança

DEF : Relação hierarquica entre classes. uma classe A acima de um classe B é chamdada de superclasse de B
A classe B é chamda de subclasse de A

B is a A
B é um A

Todo método ou atributo de A marcado como public e protected sera visivel(acessivel) em B 

no PHP = class B extends A{
...}
}
object DB = java - 
Exemplo:
+ = public
- = Private
# = protected

Animal
+ $nome
+ dormir()
+ comer()

Cachorro
+ latir()

Gato
+ miar()

Cachorro é um animal, o que ele enxerga?
+ $nome
+ dormir()
+ comer()
+ latir()
*/

class Animal{
    protected $nome;
    
    public function __construct($nome){
        $this->nome = $nome;
    }
    
    
    public function dormir(){
        echo " $this->nome: ZZZZzzzZZzz<br>";
    }
    
    public function comer(){
        echo "$this->nome: HUmmmmMM<br>";
    }
    
    //ele eh chamado qdo um metodo nao visivel pelo objeto
    public function __call($m,$args){
        echo "Bad method $m";
    }
}

class Cachorro extends Animal{
    
    public function latir(){
        echo "$this->nome: AU AU AU<br>";
    }
}


class Gato extends Animal{
    
    public function miar(){
        echo "$this->nome: Maiu Maiu Maiu<br>";
    }   
}

$c = new Cachorro("REX");
$c->latir();
$c->dormir();
$c->comer();

$g = new Gato("Garfield");
$g->miar();
$g->dormir();
$g->comer();

//variavel variavel

$acao = $_GET["acao"];
$c->$acao();
// Instancie o objeto animal usando parametro get e uma variavel varivavel

$ani = $_GET["ani"];
$d = new $ani($_GET["n"]);
$d->miar();

//URL para rodar = https://aulas-bruno-alcamin.c9users.io/Aula%205/aula5.php?acao=latir&ani=Gato&n=chato
?>
