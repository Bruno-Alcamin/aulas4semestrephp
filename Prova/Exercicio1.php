<?php
class Livro{
    private $nome, $autor, $disponivel;   
    
     public function __construct($nome, $autor, $disponivel){
        $this->nome = $nome;
        $this->autor = $autor;
        $this->disponivel = $disponivel;
     }
     
     public function emprestar(){
         $this->disponivel = false;
     }
     
     public function devolver(){ //bonus ... não obritatório
         $this->disponivel = true;
     }
     
     public function getNome(){
         return $this->nome;
     }
     
     public function getAutor(){
         return $this->autor;
     }
     
     public function getDisponivel(){
         return $this->disponivel;
     }

}

class Estante{
    private $livros;
    private $identificador;
    
    public function __construct($livros, $identificador){
        $this->identificador = $identificador;
        $this->livros = $livros;
    }
    
    public function mostralivros(){
        foreach($this->livros as $c){
            echo "nome: ".$c->getNome() ."<br>";
            echo "autor:". $c->getAutor() ."<br>";
            echo "disponivel:". $c->getDisponivel() ."<br>";
        }
    }
    
    public function mostralivrosdispoviveis(){
        foreach($this->livros as $c){
            if($c->getdisponivel()){
                echo "nome: ".$c->getNome()." <br>";
                echo "autor: ".$c->getAutor(). "<br>";
                echo "disponivel: ".$c->getDisponivel() ."<br>";
            }
        }
    }
}
$v = [];
$l1 = new Livro("livro1","autor1",true);
$l2 = new Livro("livro2","autor2",true);
$l3 = new Livro("livro3","autor3",false);
$l4 = new Livro("livro4","autor4",false);
$l5 = new Livro("livro5","autor5",true);
$v[] = $l1;
$v[] = $l2;
$v[] = $l3;
$v[] = $l4;
$v[] = $l5;

$e = new Estante($v,"Terror");
$e->mostralivros();
$e->mostralivrosdispoviveis();
?>