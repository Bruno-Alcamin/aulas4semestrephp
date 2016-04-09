<meta charset="UTF-8">
<?php
class Triangulo{
    private $lado,$perimetro,$area;
    
    public function __construct($lado){
        $this->lado = $lado;
        $this->calcArea();
        $this->calcPerimetro();
    }
    
    private function calcArea(){
        $this->area = $this->lado*(sqrt(3)/2);
    }
    
    private function calcPerimetro(){
        $this->perimetro = 3*$this->lado;
    }
    
    public function mostraTriangulo(){
        echo "Lado: ".$this->lado."<br>";
        echo "Área: ".$this->area."<br>";
        echo "Perimetro: ".$this->perimetro."<br>";
    }
}
$t = new Triangulo(4);
$t->mostraTriangulo();
?>