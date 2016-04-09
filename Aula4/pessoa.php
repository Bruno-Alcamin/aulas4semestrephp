<html>
<head>
</head>
<meta charset="UTF-8">
<body>
<?php
class Pessoa{
    private $nome,$idade,$estagio;
    
    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->ajustaEstagio();
    }
    
    public function verFilmeProibido(){
        if($this->idade>=18){
            echo "UHUUUU...<br>";
        }else{
            echo "Proibidos para menores de 18 anos!!!<br>";
        }
    }
    
    public function verEstagio(){
        echo $this->estagio."<br>";
    }
    
    public function aniversario(){
        $this->idade++;
        $this->ajustaEstagio();
    }
    
    private function ajustaEstagio(){
        if($this->idade<13){
            $this->estagio = "Criança";
        }else{
            if($this->idade<=18){
                $this->estagio = "Adolescente";
            }else{
                $this->estagio = "Adulto";
            }
        }
    }
    
}
$j = new Pessoa("joao",12);
$j->verFilmeProibido();
$j->verEstagio();
$j->aniversario();
$j->verEstagio();
?>
</body>
</html>