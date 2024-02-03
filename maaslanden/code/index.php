<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maaslanden - dev-ross.com</title>
    <link rel="stylesheet" href="style.css">
    <?php 
    // include "game.php";
    // include "initialize.php";
    include "db.php";
    ?>
</head>
<body>
<a href='./../../index.html'>Home</a><br>
    <div>
        <h1>Maaslanden</h1>
        <p>Hi! This is my project Maaslanden. Maaslanden is a Board game inspired by Carcassonne and Settlers of Catan.</p>
        <p>Gather resources by building land and cities. Connect to trade and expand your growing empire.</p>
        <p>Use your phone to tap the cities and get information via the NFC tag that leads to this site.</p>
</div>
    <head>

        <?php 
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
          $sql = "SELECT * FROM game_" . intval($_GET['game']);
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
          echo "<table id='main-table'>";
          echo "this is the table for game nr. " . $_GET['game'];
            echo "<tr>";
                echo "<th>name</th>";
                echo "<th>type</th>";
                echo "<th>population</th>";
                echo "<th>industry</th>";
                echo "<th>city id</th>";
                echo "<th>player</th>";
                
            echo "</tr>";
            foreach($results as $result) {
                echo "<tr>";
                    echo "<td>" . $result["name"] . "</td>";
                    echo "<td>" . $result["type"] . "</td>";
                    echo "<td>" . $result["current_pop"] . "</td>";
                    echo "<td>" . $result["industry"] . "</td>";
                    echo "<td>" . $result["city_id"] . "</td>";
                    echo "<td>" . $result["player_id"] . "</td>";
                echo "</tr>";
            };
            echo "</table>";
        ?>
        <div>
            <h3>Name</h3>
            <p>This name is picked randomly from the database, then removed to avoid getting the same name twice.</p>
            <h3>Type</h3>
            <p>The Type is also chosen semi-randomly, E.g. village has a higher chance of being picked, and capital can be picked once and is then removed from the database</p>
            <h3>Population</h3> 
            <p>The population is chosen semi-randomly as well, a village will have a random value from a lower range as a city.</p>
            <h3>Industry</h3>
            <p>The industry is chosen randomly from a list, and can appear more often.</p>
            <h3>City ID</h3>
            <p>The city ID is a unique number that is used to identify the city in the game selected, in this case game: <?php echo $_GET['game']?></p>
        </div>
    </head>
</body>
</html>