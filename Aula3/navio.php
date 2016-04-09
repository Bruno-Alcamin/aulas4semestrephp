<?php
require_once("comandante.php");
    class Navio{
        public $nome,$bandeira,$comandante;
        
        public function __construct($nome,$bandeira, Comandante $c){
            $this->nome = $nome;
            $this->bandeira = $bandeira;
            $this->comandante = $c;
        }
        
        
        public function mostraInfo(){
            echo $this->nome." ";
            echo $this->bandeira." ";
            $this->comandante->info();
        }
        
        public function contratar(Comandante $c){
            $this->comandante = $c;
        }
}
$c = new Comandante("Vagabundo ","Italiano ");
$n = new Navio("Concordia ","Italia ",$c);
$n->mostraInfo();



?>