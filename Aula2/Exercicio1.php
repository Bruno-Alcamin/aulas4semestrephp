<?php

class Calculadora{
    
    public $a,$b;    

    
    public function soma(){
        return $this->a+$this->b;
    }
    
    public function div(){
        return $this->a/$this->b;
    }
    
    public function sub(){
        return $this->a-$this->b;
    }
    
    public function mult(){
        return $this->a*$this->b;
    }
    
}

$a = new Calculadora;

$a->a = $_GET["num1"];
$a->b = $_GET["num2"];
$op = $_GET["op"];
switch($op){
    case 1:
        echo "A Adição dos números $a->a e $a->b é: ".$a->soma();  
    break;
    case 2:
        echo "A Subtração dos números $a->a e $a->b é: ".$a->sub();
    break;
    case 3:
        echo "A divisão dos números $a->a e $a->b é: ".$a->div();
    break;
    case 4:
        echo "A Multiplicação dos números $a->a e $a->b é: ".$a->mult();
    break;
}

?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<form>
    <label>Numero 1:
    <input type="number" name="num1"/>
    </label>
    <label>Numero 2:
    <input type="number" name="num2"/>
    </label>
    <select name="op">
	   <option value="1">Adição</option></option>
	   <option value="2">Subtração</option>
	   <option value="3">Divisão</option>
	   <option value="4">Multiplicação</option>
	</select>
    <input type="submit" value="Submit"/>
</form>
