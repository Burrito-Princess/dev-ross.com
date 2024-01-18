<?php
include "db.php";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }


$stmt = $conn->prepare("SELECT * FROM game_keys WHERE game = " . intval($_GET['game']));
$stmt->execute();
$result_key = $stmt->fetch(PDO::FETCH_ASSOC);


if ($result_key['game_key'] == intval($_GET['key'])) {
  echo "reset!<br>";
  $stmt = $conn->prepare("DELETE FROM game_" . intval($_GET['game']));
$stmt->execute();

$stmt = $conn->prepare("DELETE FROM game_variables WHERE game_id = " . intval($_GET['game']));
$stmt->execute();

$sql_village = "INSERT INTO game_variables (kind, variable, game_id) VALUES ('city', 'village', '" . intval($_GET['game']) . "')";
$sql_town = "INSERT INTO game_variables (kind, variable, game_id) VALUES ('city', 'town', '" . intval($_GET['game']) . "')";
$sql_city = "INSERT INTO game_variables (kind, variable, game_id) VALUES ('city', 'city', '" . intval($_GET['game']) . "')";
$sql_capital = "INSERT INTO game_variables (kind, variable, game_id) VALUES ('city', 'capital', '" . intval($_GET['game']) . "')";

$stmt_village = $conn->prepare($sql_village);
$stmt_town = $conn->prepare($sql_town);
$stmt_city = $conn->prepare($sql_city);
$stmt_capital = $conn->prepare($sql_capital);

$stmt_capital->execute();


for ($i = 0; $i < 5; $i++) {
  $stmt_village->execute();
  if ($i > 0){
    $stmt_town->execute();
  }
  if ($i > 1){
    $stmt_city->execute();
  }
}
$industry_types = array(
      "fishing",
      "nuclear",
      "farming",
      "tourism",
      "forest",
      "mining"
);

$city_names = array(
  "Amsterdam",
  "Rotterdam",
  "Den Haag",
  "Utrecht",
  "Eindhoven",
  "Tilburg",
  "Groningen",
  "Almere",
  "Breda",
  "Nijmegen"
);


foreach ($industry_types as $industry_type) {
    $sql_industry = "INSERT INTO game_variables (kind, variable, game_id) VALUES ('industry', '". $industry_type . "', '" . intval($_GET['game']) . "')";
    $stmt_industry = $conn->prepare($sql_industry);
    $stmt_industry->execute();
}

foreach ($city_names as $city_name) {
    $sql_city = "INSERT INTO game_variables (kind, variable, game_id) VALUES ('city_name', '". $city_name . "', '" . intval($_GET['game']) . "')";
    $stmt_city = $conn->prepare($sql_city);
    $stmt_city->execute();
}
} else {
  echo "key incorrect";
  exit();
}

