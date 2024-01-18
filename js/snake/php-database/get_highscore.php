<?php
include 'db.php';
header('Content-Type: application/json; charset=utf-8');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM scores INNER JOIN players ON scores.player_id = players.id ORDER BY score DESC LIMIT 6");
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
echo json_encode($results);

    

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    echo json_encode('[{"name":"error","msg":"' . $e->getMessage() . '"}]');
}




$conn = null;
