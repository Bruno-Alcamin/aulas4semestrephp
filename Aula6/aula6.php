<?php

//Quadrados e retangulos sao quadrilateros, eh possivel calcular area e perimetros de ambos.
//Um quadrado tem um atributo lado e o retangulo tem dois. 
//Desenhe o diagrama de classes e implemente
/*
Quadrilateros
+ perimetro()
+ area()

Quadrado
# $lado
+ perimetro() //Override
+ area() //Override

Retangulo
# $altura
# $base
+ perimetro() //Override
+ area() //Override
*/

abstract class Quadrilateros{
    //classes abstratas podem ter construtor,  para que seus filhos possam chamar
    public abstract function area(); // sem codigo = abstract
    
    public abstract function perimetro(); // sem código  = abstract
    
}

class Quadrado extends Quadrilateros{
    
    protected $lado;
    
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

class Retangulo extends Quadrilateros{
    
    protected $base,$altura;
    
    
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

//chamar contrutor do pai no php e java
//parent::__construct($lado1)
//java = super(lado1)

$d = new Quadrado(4);
echo $d->area()."<br>";
echo $d->perimetro()."<br>";

$r = new Retangulo(4,8);
echo $r->area()."<br>";
echo $r->perimetro()."<br>";


?>