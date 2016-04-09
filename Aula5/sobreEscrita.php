<?php
/*
Sobre Escrita (override)

Def: É o uso de um mesma assinatura de metodo em uma relacao de herança.

class A {
    
    public function metodo(){
        
    }
}

class B extends A{
    
    
    Override
    public function metodo(){
        
    }
}

Em B metodo() é uma sobrescrita de metodo() em A.

Assinatura : Nome + Parametros.

o intuito da sobrescrita é p/ generalizar comportamentos que depende das subclasses.

Animal
+ $nome
+ dormir()
+ comer()
+ emitirSom()
Cachorro
+ emitirSom() //override

Gato
+ emitirSom() //override

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
    
    public function emitirSom(){
        echo "Generico";
    }
    
    //ele eh chamado qdo um metodo nao visivel pelo objeto
    public function __call($m,$args){
        echo "Bad method $m";
    }
}

class Cachorro extends Animal{
    //override
    public function emitirSom(){
        echo "$this->nome: AU AU AU<br>";
    }
}


class Gato extends Animal{
    //override
    public function emitirSom(){
        echo "$this->nome: Maiu Maiu Maiu<br>";
    }   
}

$prisao[] = new Cachorro("REX");
$prisao[] = new Gato("Branco");
$prisao[] = new Gato("Garfield");
$prisao[] = new Cachorro("Fuffly");
foreach ($prisao as $bicho) {
    $bicho->emitirSom();
}
?>