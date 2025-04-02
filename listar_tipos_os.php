<?php
require_once 'config.php';

try {
    $stmt = $conn->query("SELECT id, nome FROM tipos_os");
    $tipos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    header('Content-Type: application/json');
    echo json_encode($tipos);
} catch(PDOException $e) {
    header('Content-Type: application/json');
    echo json_encode([]);
}
?> 