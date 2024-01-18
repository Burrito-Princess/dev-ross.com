<?php

include("steam.php");
include("gamesapi.php");
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    // error was suppressed with the @-operator
    if (0 === error_reporting()) {
        return false;
    }
    
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});



function call($game_data, $apikey){
    $GLOBALS['rf_start'] = rand(0, sizeof($game_data['response']['games']));
        $rf_end = $GLOBALS['rf_start'] + 1;
        for($x = $GLOBALS['rf_start']; $x < $rf_end; $x++){
                    
            $apiUrl = 'http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=' . $game_data['response']['games'][$x]['appid'] . '&key='. $apikey .'&steamid=76561198299917477';

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
                $gameinfo_data = json_decode($response, true);
            // var_dump($gameinfo_data);

            $GLOBALS['random_game'] = $gameinfo_data['playerstats']['gameName'];
            $first12 = substr($GLOBALS['random_game'], 0, 12);
            if ($first12 == "ValveTestApp"){
                throw new ErrorException('error');
            }
            if ($GLOBALS['random_game'] == ""){
                throw new ErrorException('error');
            }
            if ($GLOBALS['random_game'] == "Colossal Order Game"){
                $GLOBALS['random_game'] = "Cities: Skylines";
            }
            
                 
        }
}
$found = false;
while (!$found){
    try{
        call($game_data, $apikey);
        $found = true;
    } catch (ErrorException $e){
        //next!!
       }
    }
    
                

        
