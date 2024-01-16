<?php
$host = 'localhost';
$db = 'zingmp3';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Kết nối không thành công: " . $e->getMessage());
}

$query = "SELECT * FROM songs";
$statement = $pdo->prepare($query);
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

$json_data = json_encode($result, JSON_PRETTY_PRINT);

file_put_contents('../data.json', $json_data);

$pdo = null;
