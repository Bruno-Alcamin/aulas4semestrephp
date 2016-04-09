<html>
<head>
</head>
<body>
<?php
//Uma lanterna só funciona com duas Pilhas. cada Pilha deve possuir ao menos 10 pontos de durabilidade para manter a lanterna acesa.
//Dependendo da Pilha a durabilidade pode se esgotar com rapidez.
// É possivel checar o estado de uma Pilha e de uma lanterna.
class Lanterna{
    public $p1,$p2;
//a palavra Pilha indica um type Hint
//ler sobre contrutores com associação
    public function __construct(Pilha $p1,Pilha $p2){
        $this->p1 = $p1;
        $this->p2 = $p2;
    }
    
    public function click(){
        if(is_null($this->p1) || is_null($this->p2)){
            echo "Sem pilhas!";
        }elseif($this->p1->checaEstado()<10||$this->p2->checaEstado()<10){
                echo "Carga fraca!";
            }else{
                echo "Lanterna acesa!";
                $this->p1->reduzirDurabilidade();
                $this->p2->reduzirDurabilidade();
            }
    }

    
    public function checaEstados(){
        echo $this->p1->checaEstado()."<br>";
        echo $this->p2->checaEstado()."<br>";  
    }
}
class Pilha{
    public $durabilidade,$fatorDurabilidade;
    
    public function __construct($durabilidade,$fatorDurabilidade){
        $this->durabilidade = $durabilidade;
        $this->fatorDurabilidade = $fatorDurabilidade;
    }
    
    public function reduzirDurabilidade(){
        $this->durabilidade-= $this->fatorDurabilidade;
    }

    public function checaEstado(){
        return $this->durabilidade;   
    }
}

$p01 = new Pilha(50,1);
$p02 = new Pilha(20,3);
$l = new Lanterna($p01,$p02);
$l->click();
$l->checaEstados();
?>
</body>
</html>