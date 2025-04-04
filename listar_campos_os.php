<?php

include 'config.php';

function listar_campos($conn) {
    
    $id = $_GET['id'];
    $query = "SELECT 
	tb_campos_os.label,
    tb_campos_os.tag,
    tb_campos_os.type,
    TTS.name
    FROM 
        tb_tipo_campos
    JOIN tb_tipo_de_servico AS TTS ON tb_tipo_campos.tipo_servico_id = TTS.tipo_servico_id
    JOIN tb_campos_os ON tb_tipo_campos.campos_id = tb_campos_os.id
    WHERE TTS.tipo_servico_id = $id ";


    $data = $conn->query($query);

    $result = $data->fetchAll(PDO::FETCH_ASSOC);
   

    return json_encode($result);
}

echo listar_campos($conn);

?>
