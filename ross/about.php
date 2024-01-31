<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Ross - dev-ross.com</title>
  <link rel="stylesheet" href="./../src/input.css" />
  <link rel="stylesheet" href="./../output.css" />
  <link rel="apple-touch-icon" sizes="57x57" href="./../assets/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="./../assets/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="./../assets/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="./../assets/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="./../assets/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="./../assets/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="./../assets/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="./../assets/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="./../assets/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="./../assets/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="./../assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="./../assets/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="./../assets/favicon/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>

<body>
  <div class="h-full flex justify-start">
    <div class="hidden lg:inline ">
      <div id="insg_img">
        <img class="h-screen" src="../assets/img/insignia-king-ross.svg" alt="insignia king ross" />
      </div>
      <div id="below-img" style="height: 45rem" class="w-auto bg-king_pink flex flex-col items-center">
        <a href="./../index.html">
          <button class="bg-king_blue h-10 w-32 rounded-xl text-king_white hover:bg-hover_king_blue m-5">
            Home
          </button>
        </a>
        <a href="./../js/nsapi/">
          <button class="bg-king_blue h-10 w-32 rounded-xl text-king_white hover:bg-hover_king_blue m-5">
            NS API
          </button>
        </a>
        <a href="./../maaslanden/code/">
          <button class="bg-king_blue h-10 w-32 rounded-xl text-king_white hover:bg-hover_king_blue m-5">
            Maaslanden
          </button>
        </a>
        <a href="./../js/Numbers/">
          <button class="bg-king_blue h-10 w-32 rounded-xl text-king_white hover:bg-hover_king_blue m-5">
            Numbers.exe
          </button>
        </a>
        <div class="bg-king_blue w-4/5 h-64 mt-20 rounded-xl flex flex-col">
          <div class="mx-5 text-king_white">
            <div class="text-2xl mt-3">Contact</div>
            <br>
            <div class="flex justify-center h-full w-full">
              <a class="h-1/2 w-1/2 bg-king_pink m-3 flex justify-center items-center text-black" href="mailto:dev-ross@hotmail.com">
              <div >
                mail
              </div>
            </a>
              <div class="h-1/2 w-1/2 bg-king_pink m-3">
                <a href="mailto:dev-ross@hotmail.com">mail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="lg:h-40 h-24 lg:w-1/2 w-2/3  place-content-center mx-auto mt-10">
      <a href="./../index.html">
      <div class="lg:h-40 h-24 lg:w-full w-full bg-king_pink grid place-content-center mx-auto mt-10 rounded-3xl  hover:bg-hover_king_pink">
        <div>
          <p class="white-border font-lato lg:text-7xl md:text-small_main text-4xl">
            About Ross
          </p>
        </div>
      </div>
    </a>
      <div id="content" class="mt-10 font-lato">
        <div class="md:flex inline justify-center">
          <div class="w-full bg-king_blue text-king_white p-6 md:mx-3 mx-0 md:my-0 my-3 rounded-xl">
            Hi! My name is Ross, I currently study web-development at Grafisch Lyceum Utrecht. I like PC and Switch
            gaming, Mostly resource management or ofcourse Mario Kart. All my life I've lived in Molenhoek, 
            a small village to the south of Nijmegen. 2
            years ago I went to live in Delft to study Applied Physics,
            after half a year I quit and searched for a new study which is how I ended up at GLU.
          </div>
        </div>
      </div>
      <!-- start 1st row -->
      <div id="content" class="md:mt-10 mt-0 font-lato">
        <div class="md:flex inline justify-center">
          <div class="md:w-1/2 w-full bg-king_blue text-king_white p-6 md:mx-3 mx-0 md:my-0 my-3 rounded-xl">
            <p class="text-4xl flex justify-center">Gaming</p>
            <br>
            <div>
              <?php 
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
                  
                  ?>
            </div>
          </div>
          <div class="md:w-1/2 w-full bg-king_blue text-king_white p-6 md:mx-3 mx-0 md:my-0 my-3 rounded-xl">
            <p class="text-4xl flex justify-center">3D Printing</p><br>
            <div>
              For my 3D printer I either download cool prints from <a href="https://www.thingiverse.com">Thingiverse</a>
              or I make them myself.
              I use both Blender and Cinema4D. I'm not fluent in either of these, but I know my way around them.
              <br><br>
              When I design my own it's not something overly complicated, just functional. For example a stand for a
              server monitor, or a fan.
              I have also tried to make my own board game with it, in the process to make the rules now.
            </div>
          </div>
        </div>
        <!-- start 2nd row -->
        <div id="content" class="md:mt-10 mt-0 font-lato">
          <div class="md:flex inline justify-center">
            <div class="md:w-1/2 w-full bg-king_blue text-king_white p-6 md:mx-3 mx-0 md:my-0 my-3 rounded-xl">
              <p class="text-4xl flex justify-center">Languages</p>
              <br>
              <div>
                As you may have noticed, I only use English on this website. For programming I exclusively use English,
                never Dutch.
                With friends too I prefer to speak English over Dutch. Eventhough I'm fluent in both languages, I feel I
                can express myself better
                in English
              </div>
            </div>
            <div class="md:w-1/2 w-full bg-king_blue text-king_white p-6 md:mx-3 mx-0 md:my-0 my-3 rounded-xl">
              <p class="text-4xl flex justify-center">Back-end</p><br>
              <div>
                As you might have noticed, Front-end and design are not my strong suits. I prefer to work on the back-end.
                I love to work with databases and API's to make the website more dynamic. Getting information and using it in exiting ways is what I love to do.
                Front-end is something I wouldn't like to specialize in, but it would be a good skill to have. Thus am I open to learning more about it.
              </div>
            </div>
          </div>
        </div>
      </div>


          <!-- start 3rd row -->

          <!-- end -->

        </div>
</body>

</html>