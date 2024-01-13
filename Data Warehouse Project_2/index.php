<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beverages";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT * FROM phone";
$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll();

header('Content-Type: application/json');
echo json_encode($result);
?>