<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>    
    <style>
    div{
        width:480px;
        margin-left:auto;
        margin-right:auto;
    }
    input[name="resul"]{
        width:90%;
        margin-left:auto;
        margin-right:auto;
        margin-top:5%;
        margin-bottom:5%;
        text-align:right;
        padding-right:2%;
        height:50px;
        font-size:30px;
        color:#000;
    }
    input[type="submit"]{
        display:inline;
    }
    form{
        display:inline;
    }
    button,input[type="submit"]{
        width:20%;
        height:40px;
        font-size:30px;
        margin:5%;
    }
    @media screen and (max-width: 480px){
        div{
            width:100%;
        }
        input[name="resul"]{
            width:90%;
            margin-bottom:5%;
            margin-top:5%;
            text-align:right;
            padding-right:20px;
            height:50px;
            font-size:30px;
            color:#000;
        }
        input[type="submit"]{
            display:inline;
        }
        form{
            display:inline;
        }
        button,input[type="submit"]{
            width:20%;
            height:40px;
            font-size:30px;
            margin:5%;
        }
    }
    </style>
</head>    
<body>
<?php
class Calculadora{
    public $a,$b;    

    
    public function soma(){
        return $this->a+$this->b;
    }
    
    public function div(){
        if($this->b==0){
            return "Não dividirás por zero!";   
        }else{
            return $this->a/$this->b;
        }
    }
    
    public function sub(){
        return $this->a-$this->b;
    }
    
    public function mult(){
        return $this->a*$this->b;
    }
}
$a = new Calculadora;
$a->a = $_POST["num1"];
$a->b = $_POST["num2"];
$op = isset($_POST["op"])?$_POST["op"]:0;
switch($op){
    case "+":
        preenche($a->soma());  
        break;
    case "-":
       preenche($a->sub()); 
        break;
    case "/":
        preenche($a->div()); 
        break;
    case "*":
        preenche($a->mult()); 
        break;
    case 0:
        preenche(0);        
}

function preenche($x){
    echo "<div><input type'text' name='resul' value='$x' disabled>"; 
}
?>
    <button name="numeros" value="1" >1</button>
    <button name="numeros" value="2" >2</button>
    <button name="numeros" value="3" >3</button>
    <button name="numeros" value="4" >4</button>
    <button name="numeros" value="5" >5</button>
    <button name="numeros" value="6" >6</button>
    <button name="numeros" value="7" >7</button>
    <button name="numeros" value="8" >8</button>
    <button name="numeros" value="9" >9</button>
    <button name="numeros" value="0" >0</button>
    <button name="operador" value="+" >+</button>
    <button name="operador" value="-" >-</button>
    <button name="operador" value="/" >/</button>
    <button name="operador" value="*" >*</button>
<form method="post" action="calc.php">
    <label>Numero 1:
    <input type="text" name="num1"/>
    </label>
    <label>Numero 2:
    <input type="text" name="num2"/>
    </label>
     <label>operador:
    <input type="text" name="op"/>
    </label>
    <input type="submit" value="="/>
</form>
</div>
<script type="text/javascript">
    $('button[name="numeros"]').click(function(){
        if($('input[name="op"]').val()!=""&&$('input[name="num1"]').val()!=""){
            $('input[name="num2"]').val($('input[name="num2"]').val()+$(this).val());
            preenche();
        }else{
            $('input[name="num1"]').val($('input[name="num1"]').val()+$(this).val()); 
            preenche();
        }
    });
    $('button[name="operador"]').click(function(){
        if($('input[name="num1"]').val()==""){
            $('input[name="num1"]').val($('input[name="resul"]').val());
            $('input[name="op"]').val($(this).val());
            preenche();
        }else{
            $('input[name="op"]').val($(this).val());
            preenche();
        }
    });
    function preenche(){
        $('input[name="resul"]').val($('input[name="num1"]').val()+$('input[name="op"]').val()+$('input[name="num2"]').val());
    }
    $('input[type="text"]').hide();
    $('label').hide();
    $('input[name="resul"]').show();
</script>
</body>
</html>
