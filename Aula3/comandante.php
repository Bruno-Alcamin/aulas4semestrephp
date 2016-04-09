<?php
    class Comandante{
        public $nome,$nasc;
        
        public function __construct($nome,$nasc){
            $this->nome = $nome;
            $this->nasc = $nasc;
        }
        
        public function info(){
            echo $this->nome;
            echo $this->nasc;
        }
        
    
        
    }





?>