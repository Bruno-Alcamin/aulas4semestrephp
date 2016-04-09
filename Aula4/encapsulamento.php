<html>
<head>
</head>
<body>
<?php
//Encapsulamento: conceito que permite esconder o estado (ou metodos) de um objeto 
//ha tres modificadores de acesso, em php, que são: public, private, protected
//public: qualquer classe acessa
//protected apenas a propria classe ou subclasses acessam 
//private apenas a propria classe acessa
//data hiding = esconder atributos das classes e metodos publics
class Foo{
    public $x;
    private $y;
    
    public function setY($y){
        $this->y = $y;
    }
    
    public function getY(){
        return $this->y;
    }
    
    public function ola1(){
        echo "Metodo Public <br>";
    }
    
    private function ola2(){
        echo "Metodo private <br>";
    }
}

$x = new Foo();
$x->x = 3;
//$x->y = 5; acesso negado elemento private
echo "$x->x<br>";
//echo "$x->y<br>"; acesso negado elemento private
$x->ola1();
//$x->ola2(); acesso negado elemento private

?>
</body>
</html>