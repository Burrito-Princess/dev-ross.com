<?php

include("steam.php");
include("gamesapi.php");

// Custom error handler to convert warnings and notices to exceptions
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    // If error reporting is suppressed with the @-operator, do nothing
    if (0 === error_reporting()) {
        return false;
    }
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});

/**
 * Fetches a random game's statistics for a specific Steam user.
 *
 * @param array $game_data Array containing the user's game data.
 * @param string $apikey Steam Web API key.
 * @return array|null Returns an array with game information or null on failure.
 */
function fetchRandomGameStats($game_data, $apikey) {
    // Ensure the game data array is not empty
    if (empty($game_data['response']['games'])) {
        throw new Exception('No games found in the provided game data.');
    }

    // Select a random game index
    $totalGames = count($game_data['response']['games']);
    $randomIndex = rand(0, $totalGames - 1);
    $selectedGame = $game_data['response']['games'][$randomIndex];

    // Construct the API URL
    $apiUrl = 'https://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v2/?appid=' 
              . $selectedGame['appid'] 
              . '&key=' . $apikey 
              . '&steamid=76561198299917477';
            //   echo $apiUrl;
            //   exit;

    // Initialize cURL session
    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Set a timeout for the request

    // Execute cURL session and get the response
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        $error_msg = 'cURL error: ' . curl_error($ch);
        curl_close($ch);
        throw new Exception($error_msg);
    }

    // Check HTTP response code
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode !== 200) {
        curl_close($ch);
        throw new Exception('HTTP error: ' . $httpCode);
    }

    // Close cURL session
    curl_close($ch);

    // Decode the JSON response
    $gameinfo_data = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception('JSON decode error: ' . json_last_error_msg());
    }

    // Validate the response structure
    if (isset($gameinfo_data['playerstats']['gameName'])) {
        $gameName = $gameinfo_data['playerstats']['gameName'];

        // Filter out unwanted game names
        if (strpos($gameName, 'ValveTestApp') === 0 || empty($gameName)) {
            throw new Exception('Invalid game name encountered.');
        }

        // Handle specific game name cases
        if ($gameName === 'Colossal Order Game') {
            $gameName = 'Cities: Skylines';
        }

        return [
            'gameName' => $gameName,
            'playtime' => $selectedGame['playtime_forever'] ?? 0
        ];
    } else {
        throw new Exception('Unexpected API response structure.');
    }
}

// Main execution loop
$found = false;
while (!$found) {
    try {
        $gameStats = fetchRandomGameStats($game_data, $apikey);
        $found = true;

        // Output the game information
        echo "Random Game: " . $gameStats['gameName'] . "<br>";
        $playtime = $gameStats['playtime'];
        $time_unit = " min";
        if ($playtime > 60) {
            $playtime = round($playtime / 60, 1);
            $time_unit = " h";
        }
        echo "Playtime: " . $playtime . $time_unit . "<br>";

    } catch (Exception $e) {
        // Log the exception message for debugging purposes
        error_log($e->getMessage());
        // Continue to the next iteration to try another game
    }
}
?>
