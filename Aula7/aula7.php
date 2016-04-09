<html>
<head>
</head>
<?php

class Teste{
    
    //Interpolação
    public function cadastro(){
        $data = "<a href='/teste/listar'>mostar lista"."</a> <a href='/teste/pesquisa'>Pesquisa</a>";
        require_once "form.php";
    }
    public function pesquisa(){
        $data = "<a href='/teste/cadastro'>Cadastro </a>";
        require_once "pesqId.php";
    }
    
    
    public function editar(){
        $data = "<a href='/teste/listar'>mostar lista"."</a> <a href='/teste/pesquisa'>Pesquisa</a>";
        require_once "edit.php";
    }
    
    public function __call($m,$args){
        echo "$m Invalido";
    }
    
    public function insert(){
        $nome = $_POST["nome"];
        $mysqli = new mysqli("127.0.0.1", "bruno_alcamin", "", "Teste");
        if ($mysqli->connect_errno) {
            echo "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $stmt = $mysqli->prepare("INSERT INTO User(nm_Usuario) VALUES (?)");
        $stmt->bind_param("s",$nome);
        if (!$stmt->execute()) {
            echo "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }else{
            $this->listar();
        }
        $stmt->close();
    }
    
     public function listar(){
        $mysqli = new mysqli("127.0.0.1", "bruno_alcamin", "", "Teste");
        $stmt = $mysqli->prepare("SELECT * FROM User");
        $stmt->execute();
        $row = $stmt->get_result()->fetch_all();
        //var_dump($row);
        echo "<table border=1>";
        echo "<tr><th> ID </th><th> Nomes </th></tr>";
        foreach ($row as $value) {
            //echo "<form method='POST' action='/teste/excluir'><input type='number' name='id' value='$value[0]' readonly style='display:none'/><tr><td>$value[0]</td><td>$value[1]</td><td><input type='submit' value='excluir'/></td></tr></form>";
            echo "<tr><td>$value[0]</td><td>$value[1]</td><td><a href='/teste/excluir?id=$value[0]'>Excluir</a></td><td><a href='/teste/editar?id=$value[0]'>Editar</a></td></tr>";
        }
        echo "</table>";
        echo "<a href='/teste/cadastro'>voltar ao cadastro"."</a> <a href='/teste/pesquisa'>Pesquisa</a>";
    }
    
     public function pesquisaID(){
        $id = $_POST["id"];
        $mysqli = new mysqli("127.0.0.1", "bruno_alcamin", "", "Teste");
        $stmt = $mysqli->prepare("SELECT * FROM User where cd_User = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $row = $stmt->get_result()->fetch_all();
        //var_dump($row);
        echo "<ul>";
        foreach ($row as $value) {
            echo "<li> $value[1] </li>";
        }
        echo "</ul>";
        echo "<a href='/teste/cadastro'>voltar ao cadastro</a>";
    }
    
    public function excluir($e){
        $mysqli = new mysqli("127.0.0.1", "bruno_alcamin", "", "Teste");
        $stmt = $mysqli->prepare("delete from User where cd_User = ?");
        $stmt->bind_param("i",$e);
        $stmt->execute();
        $this->listar();
    }
    
    public function update(){
    	$e1 = $_POST["nome"];
    	$e2 = $_POST["id"];
        $mysqli = new mysqli("127.0.0.1", "bruno_alcamin", "", "Teste");
        $stmt1 = $mysqli->prepare("update User set nm_Usuario = ? where cd_User = ?");
        $stmt1->bind_param("si",$e1,$e2);
        $stmt1->execute();
        $this->listar();
    }
    
}

$a = $_GET["param"];
$b = isset($_GET["id"])?$_GET["id"]:0;
$c = isset($_GET["id"])?$_GET["id"]:0;
$t = new Teste();
$t->$a($c,$b);	


//ROTA
//Classe/metodo/arg1/arg2/arg3...


//Iniciando mysql
//mysql-ctl start

//phpmyadmin-ctl install

//USUARIO = bruno_alcamin
?>
<body>

</body>
</html>