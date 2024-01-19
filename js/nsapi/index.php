<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NS - dev-ross.com</title>
    <link rel="stylesheet" href="./../../output.css">
    <link rel="stylesheet" href="./../../src/input.css">
    <?php include "nsapi.php" ?>
  </head>
  <body >
    <a href="./../../index.html">Home</a>
    
    <h1 id="where" class="flex justify-center text-xl">Utrecht</h1>
    <h3 id="code" class="flex justify-center">UT</h3>
    <div class="flex justify-center">
    <input type="text" id="dep_station" placeholder="delft" />
    <button onclick="dep_station()">Push Station</button>
  </div>
    <br /><br />
    <div id="shortcut-button" class="flex justify-center">
      <div id="flex-container">
        <button class="stations border-4 p-3 bg-king_blue hidden md:inline" id="" onclick="shortcut('RTD', 'Rotterdam Centraal')">
          Rotterdam Centraal
        </button>
        <button class="stations border-4 p-3 bg-king_blue hidden md:inline" id="" onclick="shortcut('ASD', 'Amsterdam Centraal')">
          Amsterdam Centraal
        </button>
        <button class="station border-4 p-3 bg-king_blue hidden md:inline" id="" onclick="shortcut('GVC', 'The Hague Centraal')">
          The Hague Centraal
        </button>
        <button class="stations border-4 p-3 bg-king_blue hidden md:inline" id="" onclick="shortcut('UT', 'Utrecht Centraal')">
          Utrecht Centraal
        </button>
        <button class="stations border-4 p-3 bg-king_blue hidden md:inline" id="" onclick="shortcut('AH', 'Arnhem Centraal')">
          Arnhem Centraal
        </button>
      </div>
    </div>
    <br /><br />

    <table class="flex justify-center">
      <tr>
        <th>Catagory</th>
        <th>Destination</th>
        <th>Departure time</th>
        <th>Platform</th>
        <th class="hidden md:table-cell">Via</th>
        <th class="hidden md:table-cell">Messages</th>
      </tr>
      <tr>
        <th class="border p-3 " id="0_cat"></th>
        <th class="border p-3" id="0">No information</th>
        <th class="border p-3" id="0_time"></th>
        <th class="border p-3" id="0_plat"></th>
        <th class="border p-3 hidden md:table-cell" id="0_stp"></th>
        <th class="border p-3 hidden md:table-cell" id="0_mesg"></th>
      </tr>
      <tr>
        <th class="border p-3" id="1_cat"></th>
        <th class="border p-3" id="1">No information</th>
        <th class="border p-3" id="1_time"></th>
        <th class="border p-3 plat" id="1_plat"></th>
        <th class="border p-3 hidden md:table-cell" id="1_stp"></th>
        <th class="border p-3 hidden md:table-cell" id="1_mesg"></th>
      </tr>
      <tr>
        <th class="border p-3" id="2_cat"></th>
        <th class="border p-3" id="2">No information</th>
        <th class="border p-3" id="2_time"></th>
        <th class="border p-3 plat" id="2_plat"></th>
        <th class="border p-3 hidden md:table-cell" id="2_stp"></th>
        <th class="border p-3 hidden md:table-cell" id="2_mesg"></th>
      </tr>
      <tr>
        <th class="border p-3" id="3_cat"></th>
        <th class="border p-3" id="3">No information</th>
        <th class="border p-3" id="3_time"></th>
        <th class="border p-3 plat" id="3_plat"></th>
        <th class="border p-3 hidden md:table-cell" id="3_stp"></th>
        <th class="border p-3 hidden md:table-cell" id="3_mesg"></th>
      </tr>
      <tr>
        <th class="border p-3" id="4_cat"></th>
        <th class="border p-3" id="4">No information</th>
        <th class="border p-3" id="4_time"></th>
        <th class="border p-3 plat" id="4_plat"></th>
        <th class="border p-3 hidden md:table-cell" id="4_stp"></th>
        <th class="border p-3 hidden md:table-cell" id="4_mesg"></th>
      </tr>
      <tr>
        <th class="border p-3" id="5_cat"></th>
        <th class="border p-3" id="5">No information</th>
        <th class="border p-3" id="5_time"></th>
        <th class="border p-3 plat" id="5_plat"></th>
        <th class="border p-3 hidden md:table-cell" id="5_stp"></th>
        <th class="border p-3 hidden md:table-cell" id="5_mesg"></th>
      </tr>
      <tr>
        <th class="border p-3" id="6_cat"></th>
        <th class="border p-3" id="6">No information</th>
        <th class="border p-3" id="6_time"></th>
        <th class="border p-3 plat" id="6_plat"></th>
        <th class="border p-3 hidden md:table-cell" id="6_stp"></th>
        <th class="border p-3 hidden md:table-cell" id="6_mesg"></th>
      </tr>
      <tr>
        <th class="border p-3" id="7_cat"></th>
        <th class="border p-3" id="7">No information</th>
        <th class="border p-3" id="7_time"></th>
        <th class="border p-3 plat" id="7_plat"></th>
        <th class="border p-3 hidden md:table-cell" id="7_stp"></th>
        <th class="border p-3 hidden md:table-cell" id="7_mesg"></th>
      </tr>
      <tr>
        <th class="border p-3" id="8_cat"></th>
        <th class="border p-3" id="8">No information</th>
        <th class="border p-3" id="8_time"></th>
        <th class="border p-3 plat" id="8_plat"></th>
        <th class="border p-3 hidden md:table-cell" id="8_stp"></th>
        <th class="border p-3 hidden md:table-cell" id="8_mesg"></th>
      </tr>
      <tr>
        <th class="border p-3" id="9_cat"></th>
        <th class="border p-3" id="9">No information</th>
        <th class="border p-3" id="9_time"></th>
        <th class="border p-3 plat" id="9_plat"></th>
        <th class="border p-3 hidden md:table-cell" id="9_stp"></th>
        <th class="border p-3 hidden md:table-cell" id="9_mesg"></th>
      </tr>
    </table>
    <br /><br /><br />
  </body>
</html>
