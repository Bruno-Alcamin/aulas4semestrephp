<?php
/*
Exercicio: Um animal pode emitirSom e dormir.
Um cachorro pode cavar, o gato porde arranhar 
e o urso hibernar. Gato, cachorro e urso são animais.
Um transformer e um iDog são robos.
Eles podem recarregar e desligar. sabe0se também que o gato, o cachorro e o transformer podem matar.
*/

interface Animal{
    
    function dormir();
    
    function emitirSom();
    
}

interface Robo{
    
    public function recarregar();
    
    public function desligar();
}

interface Matar{
    
    public function matar();
}

class Cachorro implements Animal,Matar{
    
    public function dormir(){
        echo "dormiu";
    }
    
    public function emitirSom(){
        echo "Au AU ";
    }
    
    public function cavar(){
        echo "cavou";
    }
    
    public function matar(){
        echo "Matou";
    }
}

class Gato implements Animal,Matar{
    
    public function dormir(){
        echo "dormiu";
    }
    
    public function emitirSom(){
        echo "MIAU MIAU ";
    }
    
    public function arranhar(){
        echo "arranhar";
    }
    
    public function matar(){
        echo "Matou";
    }
}

class Urso implements Animal{
    
    public function dormir(){
        echo "dormiu";
    }
    
    public function emitirSom(){
        echo "HUAAHHHA";
    }
    
    public function hibernar(){
        echo "hibernou";
    }
}

class iDog implements Robo{
    
    public function desligar(){
        echo "desligou";
    }
    
    public function recarregar(){
        echo "recarregou";
    }
}


class Transformer implements Robo,Matar{
    
    public function desligar(){
        echo "desligou";
    }
    
    public function recarregar(){
        echo "recarregou";
    }
    
    public function matar(){
        echo "Matou";
    }
}



?>