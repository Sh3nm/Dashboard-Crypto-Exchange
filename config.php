<?php
// Database connection settings
$host = 'localhost'; // Database host
$db = 'crypto_exchange'; // Updated database name
$user = 'root'; // Database username
$pass = ''; // Database password (leave empty if not set)

// Create a PDO instance for database connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
