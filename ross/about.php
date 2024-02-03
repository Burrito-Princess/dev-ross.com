<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Ross - dev-ross.com</title>
  <link rel="stylesheet" href="./../src/input.css" />
  
  <link rel="stylesheet" href="./../src/output.css" />
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
<!-- <script>
  function copyText(){
    console.log("yes")
    navigator.permissions.query({ name: "write-on-clipboard" }).then((result) => {
  if (result.state == "granted" || result.state == "prompt") {
    alert("Write access granted!");
  }
});
  navigator.clipboard.writeText
                ("my discord");
                
  }
          
</script> -->
</head>

<body class="h-max bg-king_brown">
  <div class="h-full flex justify-start bg-king_brown">
    <div class="hidden lg:inline ">
      <div id="insg_img">
        <img class="h-screen" src="../assets/img/insignia-king-ross.svg" alt="insignia king ross" />
      </div>
      <div>
      <div id="below-img" style="height: 60rem" class="overflow-hidden w-auto grow bg-king_pink flex flex-col items-center">
        <a href="./../index.html">
          <button class="shadow-xl bg-king_blue h-10 w-32 rounded-xl text-king_white hover:bg-hover_king_blue m-5">
            Home
          </button>
        </a>
        <a target="_blank" href="./../js/snake/">
          <button class="shadow-xl bg-king_blue h-10 w-32 rounded-xl text-king_white hover:bg-hover_king_blue m-5">
            Snake
          </button>
        </a>
        <a href="./../js/nsapi/">
          <button class="shadow-xl bg-king_blue h-10 w-32 rounded-xl text-king_white hover:bg-hover_king_blue m-5">
            NS API
          </button>
        </a>
        <a href="./../maaslanden/code/index.php?game=1">
          <button class="shadow-xl bg-king_blue h-10 w-32 rounded-xl text-king_white hover:bg-hover_king_blue m-5">
            Maaslanden
          </button>
        </a>
        <a href="./../js/numbers/">
          <button class="shadow-xl bg-king_blue h-10 w-32 rounded-xl text-king_white hover:bg-hover_king_blue m-5">
            Numbers.exe
          </button>
        </a>
        <a target="_blank" href="https://github.com/Burrito-Princess">
          <button class="shadow-xl bg-king_blue h-10 w-32 rounded-xl text-king_white hover:bg-hover_king_blue m-5">
            Github
          </button>
        </a>
        <div class="bg-king_blue shadow-xl w-4/5 h-64 mt-20 rounded-2xl flex flex-col">
          <div class="mx-5 text-king_white">
            <div class="text-2xl mt-3">Contact</div>
            <br>
            <div class="flex flex-col justify-center h-full w-full">
              <div class="h-full w-full flex justify-center">
                <a class="hover:bg-hover_king_pink shadow-xl h-2/3 w-1/2 text-black bg-king_pink m-3 flex justify-center items-center rounded-xl text-xl" href="mailto:dev-ross@hotmail.com">mail</a>
                <button id="disc_button" onclick='copyText()' class="hover:bg-hover_king_pink shadow-xl h-2/3 w-1/2 text-black bg-king_pink m-3 flex justify-center items-center rounded-xl text-xl" href="mailto:dev-ross@hotmail.com">Discord</button>
              </div>
              <div class="h-full w-full flex justify-center">
              </div>
            
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
          <p class="font-lato lg:text-7xl md:text-small_main text-4xl">
            About Ross
          </p>
        </div>
      </div>
    </a>
      <div id="content" class="mt-10 font-lato">
        <div class="md:flex inline justify-center">
          <div class="w-full bg-king_blue text-king_white p-6 md:mx-3 mx-0 md:my-0 my-3 rounded-xl">
            Hi! My name is Ross, I currently study web development at Grafisch Lyceum Utrecht. I like PC and Switch
            gaming, especially resource management or of course Mario Kart. All my life I've lived in Molenhoek, 
            a small village to the south of Nijmegen. In September 2022 I started at GLU and since then I have discovered
            my love for programming.
         <!-- somewhere put interests such as physics and maths -->
          </div>
        </div>
      </div>
      <!-- start 1st row -->
      <div id="content" class="md:mt-10 mt-0 font-lato">
        <div class="md:flex inline justify-center">
          <div class="md:w-1/2 w-full bg-king_blue text-king_white p-6 md:mx-3 mx-0 md:my-0 my-3 rounded-xl">
            <p class="text-4xl flex justify-center">Gaming</p>
            <br>
            <div class="flex flex-col justify-center">
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

                        echo "Random game: " . $random_game . " (" . $playtime . $time_unit . ")<br>";
                        
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
              For my 3D printer I either download cool prints from <a href="https://www.thingiverse.com"><span class="underline" >Thingiverse</span></a>
              or I make them myself.
              I use both Blender and Cinema4D. I'm not fluent in either of these, but I know my way around them.
              <br><br>
              When I design my own it's not something overly complicated, just functional. For example a stand for a
              server monitor, or a fan.
              I have also tried to make <a href="./../maaslanden/code/"><span class="underline">my own board game</span></a> with it, in the process to make the rules and the back-end now.
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
                I love to work with databases and API's to make the website more dynamic. Getting information and using it in exciting ways is what I love to do.
                Front-end is something I wouldn't like to specialize in, but it would be a good skill to have. Thus am I open to learning more about it.
              </div>
            </div>
          </div>
        </div>
      </div>


          <!-- start 3rd row -->

          <!-- end -->

        </div>
        <script src="./about.js"></script>
</body>

</html>