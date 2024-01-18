<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "score_snake";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result = $conn->query("SELECT * FROM score");

    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
?>