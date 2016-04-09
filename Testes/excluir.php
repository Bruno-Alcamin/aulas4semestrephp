<?php
    $mysqli = new mysqli("127.0.0.1", "bruno_alcamin", "", "Teste");
    $cod = $_POST["cod"];
    $stmt = $mysqli->prepare("delete from User where cd_User = ?");
    $stmt->bind_param("i",$cod);
    $stmt->execute();
?>