<?php
    $mysqli = new mysqli("127.0.0.1", "bruno_alcamin", "", "Teste");
                
    $stmt = $mysqli->query("SELECT * FROM User");
                
    while($row = $stmt->fetch_assoc()):
        printf('<p><span>%s</span><button onclick="excluir(%s)">Excluir</button></p>',$row['nm_Usuario'],$row['cd_User']);
    endwhile;
?>