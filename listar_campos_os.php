<?php

include 'config.php';

function listar_campos($conn) {
    $data = $conn->query('SELECT * FROM tb_campos_os WHERE tipo_servico_id = 1');

    $result = $data->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $campo) {
        $input_id = $campo["label"];

        if($campo['tag'] == 'textarea'){
            echo '<label for="' . $input_id . '">' . $campo["label"] . ':</label>';
            echo '<'.$campo['tag'].' type="'.$campo["type"].'" id="' . $input_id . '" name="' . $input_id . '" required rows="10" cols="33"> </'.$campo['tag'].'>';
        } else {

            echo '<label for="' . $input_id . '">' . $campo["label"] . ':</label>';
            echo '<input type="'.$campo["type"].'" id="' . $input_id . '" name="' . $input_id . '" rows="4" required>';
        }

    }
}

listar_campos($conn);

?>
