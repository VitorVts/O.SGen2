<?php
require_once 'config.php';

try {
    $stmt = $conn->query("SELECT tipo_servico_id as id, name as nome FROM tb_tipo_de_servico");
    $tipos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    header('Content-Type: application/json');
    echo json_encode($tipos);
} catch(PDOException $e) {
    header('Content-Type: application/json');
    echo json_encode([]);
}
?>
