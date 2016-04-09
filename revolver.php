<?php

class Revolver{
    public $municao;
    
    public function atirar(){
       if($this->municao<=0){
            echo "Tambor Vazio";   
       }else{
            $this->municao--;
       }
    }
    
    public function recarregar(){
       if($this->municao>=12){
            echo "Tambor Cheio";   
       }else{
            $this->municao++;
       }
    }
}
    
    $c = new Revolver;
        
    $n1 = isset($_GET["num"])?$_GET["num"]:0;

    
    $c->municao = $n1;
    
	$op = isset($_GET["calc"])?$_GET["calc"]:0;
	switch($op){
		case 1:
			$c->atirar();
			$n1 = $c->municao;
			break;
		case 2:
			$c->Recarregar();
			$n1 = $c->municao;
			break;
	}
	
	echo '
	<form method="get" action="revolver.php">
	<input type="number" name="num" value="'.$n1.'"  id="resul" readonly>
	<select name="calc">
	   <option value="1">Atirar</option>
	   <option value="2">Recarregar</option>
	</select>
    <input type="submit" value="Executar">
    </form>
	';

?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript">
    $('#resul').focus(function(){
       alert("Não insira valores"); 
        $(this).blur();
    });
</script>


    
    
    





    
    