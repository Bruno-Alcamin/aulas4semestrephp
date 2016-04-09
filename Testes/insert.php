<?php
    if(count($_POST)>0){            
        $mysqli = new mysqli("127.0.0.1", "bruno_alcamin", "", "Teste");
        $nome = $_POST["nome"];
        $stmt = $mysqli->prepare("INSERT INTO User(nm_Usuario) VALUES (?)");
        $stmt->bind_param("s",$nome);
        $stmt->execute();
           
        $stmt = $mysqli->query("SELECT * FROM User order by cd_User DESC LIMIT 1")->fetch_assoc();
        printf('<p><span>%s</span><button onclick="excluir(%s)">Excluir</button></p>',$stmt['nm_Usuario'],$stmt['cd_User']);
    }
?>