<?php

include 'config.php';

function listar_campos($conn) {
    
    $id = $_GET['id'];

    $data = $conn->query("SELECT * FROM tb_campos_os WHERE tipo_servico_id = $id");

    $result = $data->fetchAll(PDO::FETCH_ASSOC);
   
    // foreach ($result as $campo) {
    //     $input_id = $campo["label"];

    //         echo '<label for="' . $input_id . '">' . $campo["label"] . ':</label>';
    //         echo '<'.$campo['tag'].' type="'.$campo["type"].'" id="' . $input_id . '" name="' . $input_id . '" required rows="10" cols="33"> </'.$campo['tag'].'>';
       

    // }

    return json_encode($result);
}

echo listar_campos($conn);

?>
