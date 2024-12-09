<?php
    include "db.php";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
      $stmt = $conn->prepare("SELECT * FROM game_keys WHERE game = " . $_GET['game']);
      $stmt->execute(); 
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      if ($_GET['key'] == $result[0]['game_key']){
      $game = $_GET['game'];
      $stmt = $conn->prepare("SELECT * FROM game_" . $game);
      $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>"; print_r($result);
    echo "<form action='' method='POST'>";
    echo "<select name='city'>";
    for ($i = 0; $i < count($result); $i++){
    echo "<option value=" . $result[$i]["city_id"] . ">" . $result[$i]["name"] ."</option>";
    }
    echo "</select>";
    echo "<select name='player'>";
    echo "<option value='1'>Player 1</option>";
    echo "<option value='2'>Player 2</option>";
    echo "<option value='3'>Player 3</option>";
    echo "<option value='4'>Player 4</option>";
    echo "</select>";
    echo "<input type='submit' value='Submit'>";
    if (isset($_POST['city'])){
        $stmt = $conn->prepare("SELECT * FROM game_" . $game . " WHERE city_id = " . $_POST['city']);
        $stmt->execute();
        $result_city = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>"; print_r($result_city);
        $sql = "UPDATE game_" . $game . " SET 
        type='" . $result_city[0]["type"] . "',
        name='" . $result_city[0]["name"] . "',
        industry='" . $result_city[0]["industry"] . "',
        initial_pop=" . $result_city[0]["initial_pop"] . ",
        current_pop=" . $result_city[0]["current_pop"] . ",
        city_id=" . $result_city[0]["city_id"] . ",
        player_id='" . $_POST['player'] . "'
        WHERE city_id=" . $_POST['city'];
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
} else {
    echo "wrong key";
}
    

?>