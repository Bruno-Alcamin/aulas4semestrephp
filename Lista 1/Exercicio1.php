<meta charset="UTF-8">
<?php
class Pessoa{
    public $nome,$sexo,$idade,$vegetariano;
    
    public function __construct($nome,$sexo,$idade,$vegetariano){
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->idade = $idade;
        $this->vegetariano = $vegetariano;
    }
    
}

class Churrasco{
    public $qtCarne;
    
    public function verficarConsumo(Pessoa $p){
        if($p->idade<=3||$p->vegetariano){
            return $this->qtCarne = 0;
        }else{
            if($p->idade<=12){
                return $this->qtCarne = 1;
            }else{
                return $this->qtCarne = 2;
            }
        }
    }
}

$p = new Pessoa("Bruno","masc",26,false);
$c = new Churrasco();
echo "A quantidade de carne necessaria é ".$c->verficarConsumo($p)." kg";
?>