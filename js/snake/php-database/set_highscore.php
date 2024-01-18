<?php
include 'db.php';
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");

$content = trim(file_get_contents("php://input"));
$decoded = json_decode($content, true);

if (!empty($decoded['name']) && !empty($decoded['score'])) {

    $name = $decoded['name'];
    $score = $decoded['score'];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // QUERIES
        $stmt = $conn->prepare("INSERT IGNORE INTO players (`name`) VALUES ('" . $name . "')");
        $stmt->execute();

        $stmt = $conn->prepare("SELECT id FROM players WHERE name='" . $name . "'");
        $stmt->execute();

        $id = $stmt->fetch(PDO::FETCH_ASSOC)['id'];

        $stmt = $conn->prepare("INSERT INTO scores (`player_id`, `score`) VALUES ('" . $id . "', '" . $score . "')");
        $stmt->execute();
        
    } catch (PDOException $e) {
        echo json_encode(['error' => 'cannot add to database']);
    }
    $conn = null;
} else {
    echo json_encode(['error' => 'invalid JSON']);
}
?>