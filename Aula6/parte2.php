<?php
/*
Classes Abstratas

Representa uma generalização de um conceito.

-> não pode ser instanciada 

-> pode possuir metodos
    abstratos (concretos também)
-> pode  possuir atributos

Metodo abstrato: Método sem corpo de código. Seu intuito é representar uma
ação que tem dependencia de suas subclasses. todo método abstrato deve ser 
sobrescrito em uma classe concreta.
*/
//Em uma interface tudo eh publico e abstrato

interface Quadrilateros{
    
    const PI = 3.14; // constante são como atributos de interfaces e não tem mudança de estado
    
    function area(); // sem codigo = abstract
    
    function perimetro(); // sem código  = abstract
    
}

class Quadrado implements Quadrilateros{
    
    private $lado;
    
    public function __construct($lado){
        $this->lado = $lado;
    }
    
    
    //Override    
    public function perimetro(){
        return $this->lado*4;
    }
    
    //Override
    public function area(){
        return $this->lado*$this->lado;
    }
    
    
    
}

class Retangulo implements Quadrilateros{
    
    private $base,$altura;
    
    
    public function __construct($base,$altura){
        $this->base = $base;
        $this->altura = $altura;
    }
    
    
    //Override    
    public function perimetro(){
        return ($this->base*2)+($this->altura*2);
    }
    
    //Override
    public function area(){
        return $this->base*$this->altura;
    }
    
}

echo Quadrilateros::PI;

?>