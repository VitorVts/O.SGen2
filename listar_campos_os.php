<?php

include 'config.php';

function listar_campos($conn) {
    
    $id = $_GET['id'];

    $data = $conn->query("SELECT * FROM tb_campos_os WHERE tipo_servico_id = $id");

    $result = $data->fetchAll(PDO::FETCH_ASSOC);
   

    return json_encode($result);
}

echo listar_campos($conn);

?>
