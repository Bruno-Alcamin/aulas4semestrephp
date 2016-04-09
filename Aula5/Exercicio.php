<?php
/*
Uma loja vende tres tipos de produtos:
livros, filmes material(de escritorio);
Todo produto possui um preco. A cada mes em um dia especifico
os livros ganham um desconto de 10%, os filmes 20%, e is materias 15%
o preco deve ser mostrado na tela e nao atualizado
desenhe um diagrama de classes e implemente todas

feito isso, faça um teste com um vetor de 6 produtos e mostre na tela os precos em promocao


Diagrama

Loja
+ $preco
+ mostraPromocoes()

Livros
+ mostraPromocoes() //Override

Filmes
+ mostraPromocoes() //Override

Material
+ mostraPromocoes() //Override
*/

class Loja{
    
    protected $preco;
    
    public function __construct($preco){
        $this->preco = $preco;
    }
    
    public function mostraPromocoes(){
        echo "Promocao sem produto";
    }
    
}
class Livros extends Loja{
    public function mostraPromocoes(){
        echo "O valor do livro em promocao: R$ ".($this->preco-($this->preco*0.10))."<br>";
    }
    
}

class Filmes extends Loja{
    public function mostraPromocoes(){
        echo "O valor do filme em promocao: R$ ".($this->preco-($this->preco*0.20))."<br>";
    }
    
}

class Material extends Loja{
    public function mostraPromocoes(){
        echo "O valor do Materia em promocao: R$ ".($this->preco-($this->preco*0.15))."<br>";
    }
    
}

$produtos[] = new Livros(10);
$produtos[] = new Filmes(20);
$produtos[] = new Material(15);
$produtos[] = new Livros(10);
$produtos[] = new Filmes(20);
$produtos[] = new Material(15);

foreach ($produtos as $value) {
    $value->mostraPromocoes();
}
?>