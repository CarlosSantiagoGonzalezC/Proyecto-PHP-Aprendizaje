<?php

try {
    $pdo = new PDO('mysql:host=localhost; dbname=pokemon;
        port=3306', 'root', '');
        
} catch (PDOException $e) {
    die("Error: No fue posible conectar: " . $e->getCode());
}

?>