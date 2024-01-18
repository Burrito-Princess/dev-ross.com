<?php

include("steam.php");
                    
                    $apiUrl = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . $apikey . '&steamids=76561198299917477';

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
                    $data = json_decode($response, true);
