<?php

include("steam.php");

                    
                    $apiUrl = 'http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key='. $apikey .'&steamid=76561198299917477&format=json?include_appinfo=1?include_played_free_games=1';

                    // Initialize cURL session
                    $ch = curl_init($apiUrl);

                    // Set cURL options
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                    // Execute cURL session and get the response
                    $response = curl_exec($ch);

                    // Check for cURL errors
                    if (curl_errno($ch)) {
                        echo 'cURL error: ' . curl_error($ch);
                    }

                    // Close cURL session
                    curl_close($ch);

                    // Decode the JSON response
                    $game_data = json_decode($response, true);
                    // var_dump($game_data['response']['games']['0']['playtime_forever']);
