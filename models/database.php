<?php
$dsn = 'mysql:host=localhost;dbname=contact;charset=utf8mb4';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  
    // Additional configuration options if needed
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}
