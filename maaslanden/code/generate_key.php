<?php

include "db.php";
include "pass.php";
 try {
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     // set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch(PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
   };
   if ($_GET['pass'] == $pass){
    if (isset($_GET['game'])){
    $data[0] = 0;
    $stmt = $conn->prepare("SELECT * FROM game_keys WHERE game = " . intval($_GET['game']));
    $stmt->execute();
    $result_key = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (isset($result_key[0])){ // if the game key exists
        echo "entry already exists<br>";
    } else {
        $key = rand(1000000000, 2147483647);
        $game = $_GET['game'];
        $stmt = $conn->prepare("INSERT INTO game_keys (game_key, game) VALUES ('$key' , '$game')");
        $stmt->execute();
        echo $_GET['game'] . "<br>";
        
    }
    } else {
      echo "no game set";
    }
  } else {
    echo "wrong password";
  }
    