<?php

include "db.php";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  $sql = "SELECT * FROM game_" . intval($_GET['game']) . " WHERE city_id =" . intval($_GET['city']);
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  echo $result["name"] . "<br>";

