<?php
$mysqlHost = 'localhost';
$mysqlUser = 'root';
$mysqlPass = '';
$mysqlDb = 'iwt';
$sqlitePath = __DIR__ . '/iwt.db';

try {
    $conn = new PDO('mysql:host=' . $mysqlHost . ';dbname=' . $mysqlDb . ';charset=utf8mb4', $mysqlUser, $mysqlPass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    try {
        $conn = new PDO('sqlite:' . $sqlitePath);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec("CREATE TABLE IF NOT EXISTS users (
            user_id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_name TEXT NOT NULL,
            user_email TEXT NOT NULL UNIQUE,
            user_password TEXT NOT NULL
        )");
    } catch (PDOException $sqliteError) {
        $conn = null;
        error_log('Database connection error: ' . $sqliteError->getMessage());
    }
}
?>
