<meta charset="UTF-8">
<?php
class Lampada{
    public $estado;
    public $x;
    
    public function __construct($estado){
        $this->estado = $estado;
        $this->x = 0;
    }
    
    public function click(){
        if($this->estado=="apagada"){
            $this->qtdAcendimentos();
            $this->estado = "acesa";
        }else{
            $this->estado ="apagada";
        }
    }
    
    public function qtdAcendimentos(){
        return $this->x++;
    }
    
    public function checaEstado(){
        return $this->estado;   
    }
}

$l = new Lampada("apagada");
$l->click();
echo $l->checaEstado()."<br>";
$l->click();
echo $l->checaEstado()."<br>";
$l->click();
echo $l->checaEstado()."<br>";
$l->click();
echo $l->checaEstado()."<br>";
$l->click();
echo $l->checaEstado()."<br>";
$l->click();
echo $l->checaEstado()."<br>";
$l->click();
echo $l->checaEstado()."<br>";
$l->click();
echo $l->checaEstado()."<br>";
echo $l->qtdAcendimentos();                                                                                                                     
?>