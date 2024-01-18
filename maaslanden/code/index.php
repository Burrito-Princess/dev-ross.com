<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php 
    // include "game.php";
    // include "initialize.php";
    include "db.php";
    ?>
</head>
<body>
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
          
          echo "<a href='./../../index.html'>Home</a><br>";
          echo "<table id='main-table'>";
          echo "this is the table for game nr. " . $_GET['game'];
            echo "<tr>";
                echo "<th>name</th>";
                echo "<th>type</th>";
                echo "<th>population</th>";
                echo "<th>industry</th>";
                echo "<th>city id</th>";
                
            echo "</tr>";
            foreach($results as $result) {
                echo "<tr>";
                    echo "<td>" . $result["name"] . "</td>";
                    echo "<td>" . $result["type"] . "</td>";
                    echo "<td>" . $result["current_pop"] . "</td>";
                    echo "<td>" . $result["industry"] . "</td>";
                    echo "<td>" . $result["city_id"] . "</td>";
                    
                echo "</tr>";
            };
            echo "</table>";
        ?>
    </head>
</body>
</html>