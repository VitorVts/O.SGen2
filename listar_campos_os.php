<?php

include 'config.php';


function listar_campos($conn){
    $data = $conn->query('SELECT * FROM tb_campos_os WHERE tipo_servico_id = 1');

}


