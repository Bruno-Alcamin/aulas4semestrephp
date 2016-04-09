<?php


class Aluno{
    public $nome, $nota;
    
    public function estaAprovado(){
        if($this->nota>=6){
            echo "<h1 style='color:green'> Aluno: $this->nome esta aprovado com a nota: $this->nota. </h1>";
        }else{
            echo "<h1 style='color:red'> Aluno: $this->nome esta reprovado com a nota: $this->nota. </h1>";
        }
    }
}

$a = new Aluno();
$a->nome = $_GET["nome"];
$a->nota = $_GET["nota"];
if($a->nome!="")
    $a->estaAprovado();
?>

<form method="get" action="aula2.php">
<label>Nome: 
<input type="text" name="nome"/>
</label>
<label>Nota: 
<input type="text" name="nota"/>
</label>
<input type="submit" value="Verificar"/>
</form>