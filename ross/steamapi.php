include("./steamapi/userapi.php");
                    include("./steamapi/gamesapi.php");
                    include("./steamapi/statsgame.php");
                    // include("./steamapi/statsgame.php");

                    // Check if the request was successful
                    if ($data) {
                        // Output the data
                        echo "<img src=". $data['response']['players']['0']["avatarfull"] . " class='rounded-xl'>";
                        echo "User: " . $data['response']['players']['0']['personaname'] . "<br>";
                        echo "From: " . $data['response']['players']['0']['loccountrycode'] . "<br>";
                        $time_unit = " min";
                        $playtime = $game_data['response']['games'][$rf_start]['playtime_forever'];
                        if ($playtime > 60){
                          $playtime = round($game_data['response']['games'][$rf_start]['playtime_forever'] / 60, 1);
                          $time_unit = " h";
                        }

                        echo "Random game I own: " . $random_game . " (" . $playtime . $time_unit . ")<br>";
                        
                    } else {
                        // Output an error message
                        echo "Error fetching data from the API";
                    }
                    
                    // Check if the request was successful
                    if ($game_data) {
                      // Output the data
                      echo "Games: " . $game_data['response']['game_count'] . "<br>";
                    
                      
                  } else {
                      // Output an error message
                      echo "Error fetching data from the API";
                  }