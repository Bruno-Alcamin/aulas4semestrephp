<?php
    class Cronometro{
        
        private $minuto,$segundo;
        
        public function __construct(){
            $this->minuto = 0;
            $this->segundo = 0;
        }
        
        public function acrescimo(){
            if($this->segundo<59){
                $this->segundo++;
            }else{
                $this->segundo=0;
                $this->minuto++;
            }
            
            echo "Minutos: $this->minuto : Segundos: $this->segundo <br>";
        }
        
        public function resetar(){
            $this->__construct();
        }
        
    }
    
$c = new Cronometro();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->acrescimo();
$c->resetar();
echo $c->acrescimo();

?>