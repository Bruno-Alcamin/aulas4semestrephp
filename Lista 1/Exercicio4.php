<meta charset="UTF-8">
<?php
class Cliente{
 private $nome,$saldo,$limite;

public function __construct($nome,$saldo,$limite){
    $this->nome = $nome;
    $this->saldo = $saldo;
    $this->limite = $limite;
}
 public function sacar($saque){
     if($saque<=($this->saldo+$this->limite)){
         if(($this->saldo-$saque)>=0){
             $this->saldo = $this->saldo-$saque;
         }else{
             $this->saldo = $this->saldo-$saque;
             $this->limite = $this->limite-($this->saldo*(-1));
             $this->saldo = 0;
         }
     }else{
         echo "Saldo Insuficiente <br>";
         $this->checarSaldo();
     }
 }
 public function saldo(){
     return $this->saldo;
 }
 public function depositar($deposito){
     $this->saldo+=$deposito;
 }
 public function checarSaldo(){
     echo "Bem Vindo ".$this->obterNome()."<br>Saldo atual: R$ ".$this->saldo." <br> Limite atual: R$ ".$this->limite."<br>";
 }
 public function obterNome(){
     return $this->nome;
 }
}

class Doc{

 public  function Transferir(Cliente $c1,Cliente $c2,$valor){
    if($c2->saldo()>=$valor){
        $c2->sacar($valor);
        $c1->depositar($valor);
        echo $c2->checarSaldo()."<br>";
        echo "Transferência realizada para ".$c1->obterNome()." no valor de R$ $valor <br>";
    }else{
        echo "Não existe saldo suficiente <br>";
        echo $c2->checarSaldo()."<br>";
    }
 }
 
}

$conta2 = new Cliente("Bruno",1000,500);
$conta1 = new Cliente("Bruno A",2000,5100);
$conta2->sacar(1499);
$conta2->checarSaldo();
$doc = new Doc();
$doc->transferir($conta2,$conta1,200);
?>