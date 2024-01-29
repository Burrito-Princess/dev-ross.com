<?php
    include "ns.php";
?>
<script>
var abb = "UT";

// function clear(){
//     abb = '';
//     str_cat = '';
//     str_dep = '';
//     str_plat = '';
//     str_stp = '';
//     str_time = '';
//     for(let s = 0; s < 10; s++){
//     document.getElementById(s).innerHTML = str_dep;
//     document.getElementById(s + "_time").innerHTML = str_time;
//     document.getElementById(s + "_plat").innerHTML = str_plat;
//     document.getElementById(s + "_stp").innerHTML = str_stp;
//     document.getElementById(s + "_cat").innerHTML = str_cat;
// }
// }

ns();
setInterval(ns, 10000);
async function ns() {
  // Departure info API
  var obj;
  const res = await fetch(
    "https://gateway.apiportal.ns.nl/reisinformatie-api/api/v2/departures?lang=english&station=" +
      abb +
      "&maxJourneys=10",
    {
      method: "GET",
      withCredentials: true,
      headers: {
        "Cache-Control": "no-cache",
        "Ocp-Apim-Subscription-Key": "<?php echo $apikey?>",
      },
    }
  );
  var info = await res.json();

  for (let i = 0; i < 10; i++) {
    console.log("Info below here");
    console.log(info);
    console.log(abb);
    let now = info.payload.departures[0].direction;
    console.log(typeof now);
    var departureArray = info.payload.departures;

    //destination
    let str_dep = info.payload.departures[i].direction;
    document.getElementById(i).innerHTML = str_dep;
    // let str_dep = JSON.stringify(departure);
    // str_dep = str_dep.replace('{"direction":"', '');
    // str_dep = str_dep.replace('"}', '');

    //train catagory
    let str_cat = info.payload.departures[i].product.categoryCode;

    // let str_cat = JSON.stringify(cat);
    // str_cat = str_cat.split('"');
    // str_cat = str_cat[3].replace('"}', '');
    if (str_cat == "IC") {
      document.getElementById(i + "_cat").style.backgroundColor = "yellow";
      document.getElementById(i + "_cat").style.color = "black";
    } else if (str_cat == "SPR") {
      document.getElementById(i + "_cat").style.backgroundColor = "lightblue";
      document.getElementById(i + "_cat").style.color = "black";
    } else if (str_cat == "ST") {
      document.getElementById(i + "_cat").style.backgroundColor = "red";
      document.getElementById(i + "_cat").style.color = "black";
    } else if (str_cat == "BUS") {
      document.getElementById(i + "_cat").style.backgroundColor = "black";
      document.getElementById(i + "_cat").style.color = "white";
    } else if (str_cat == "ICD") {
      document.getElementById(i + "_cat").style.backgroundColor = "orange";
      document.getElementById(i + "_cat").style.color = "black";
    } else if (str_cat == "ICE") {
      document.getElementById(i + "_cat").style.backgroundColor = "green";
      document.getElementById(i + "_cat").style.color = "black";
    } else if (str_cat == "THA") {
      document.getElementById(i + "_cat").style.backgroundColor = "#750b0b";
      document.getElementById(i + "_cat").style.color = "black";
    } else if (str_cat == "EST") {
      document.getElementById(i + "_cat").style.backgroundColor = "#273163";
      document.getElementById(i + "_cat").style.colour = "black";
    } else {
      document.getElementById(i + "_cat").style.backgroundColor = "grey";
      document.getElementById(i + "_cat").style.color = "black";
    }
    document.getElementById(i + "_cat").innerHTML = str_cat;

    //time
    let str_time = info.payload.departures[i].actualDateTime;
    // let str_time = JSON.stringify(time);
    // str_time = str_time.split('T');
    str_time = str_time.slice(11, 19);
    // str_time = str_time[0].replace('"}', '');
    document.getElementById(i + "_time").innerHTML = str_time;

    //stations
    // let stations = ({routeStations} = departureArray[i], {routeStations});
    var stationsArray = info.payload.departures[i].routeStations;
    if (stationsArray[0] == undefined) {
      console.log("emtpy");
      stationsArray[0] = { mediumName: "direct" };
    }
    console.log("bliep bloop");
    var str_stp = stationsArray[0].mediumName;
    for (let p = 0; p < stationsArray.length - 1; p++) {
      str_stp += "&nbsp , &nbsp&nbsp" + stationsArray[p + 1].mediumName;
    }

    document.getElementById(i + "_stp").innerHTML = str_stp;

    //platform
    let str_plat = info.payload.departures[i].actualTrack;
    // let str_plat = JSON.stringify(platform);
    // str_plat = str_plat.replace('{"actualTrack":"', '');
    // str_plat = str_plat.replace('"}', '');
    if (str_plat !== undefined) {
      document.getElementById(i + "_plat").style.backgroundColor = "blue";
      document.getElementById(i + "_plat").style.color = "white";
      document.getElementById(i + "_plat").innerHTML = str_plat;
    } else {
      document.getElementById(i + "_plat").style.backgroundColor = "black";
      document.getElementById(i + "_plat").style.color = "white";
      document.getElementById(i + "_plat").innerHTML = "BUS";
    }

    //messages
    let str_mesg = info.payload.departures[i].messages;
    // let str_mesg;
    console.log(str_mesg);
    if (str_mesg[0] != undefined) {
      document.getElementById(i + "_mesg").innerHTML = str_mesg[0].message;
    } else {
      // str_mesg = JSON.stringify(message.messages[0]);
      // str_mesg = str_mesg.split('"');

      document.getElementById(i + "_mesg").innerHTML = "Uninterrupted";
    }

    //cancelled
    let cancel = (({ cancelled } = departureArray[i]), { cancelled });
    let planned_time =
      (({ plannedDateTime } = departureArray[i]), { plannedDateTime });
    // console.log(cancel);
    if (cancel.cancelled == false) {
      document.getElementById(i + "_time").style.color = "green";
      document.getElementById(i).style.backgroundColor = "white";
      document.getElementById(i + "_stp").style.backgroundColor = "white";
      document.getElementById(i + "_time").style.backgroundColor = "white";
      document.getElementById(i + "_time").style.color = "green";
      document.getElementById(i + "_stp").style.color = "black";
      document.getElementById(i + "_mesg").style.color = "black";
      document.getElementById(i + "_mesg").style.backgroundColor = "white";
      document.getElementById(i).style.color = "black";
    } else {
      document.getElementById(i).style.backgroundColor = "red";
      document.getElementById(i + "_stp").style.backgroundColor = "red";
      document.getElementById(i + "_time").style.backgroundColor = "red";
      document.getElementById(i + "_time").style.color = "white";
      document.getElementById(i + "_stp").style.color = "white";
      document.getElementById(i + "_mesg").style.color = "white";
      document.getElementById(i + "_mesg").style.backgroundColor = "red";
      document.getElementById(i + "_plat").innerHTML = "--";
      document.getElementById(i).style.color = "white";
      document.getElementById(i + "_stp").innerHTML =
        "oopsie woopsie de trein is stukkie wukkie";
    }
    let str_ptime = JSON.stringify(planned_time);
    str_ptime = str_ptime.split("T");
    str_ptime = str_ptime[2].split("+");
    str_ptime = str_ptime[0].replace('"}', "");
    if (str_ptime === str_time) {
    } else {
      let check_time = str_time.split(":");
      let pcheck_time = str_ptime.split(":");

      // let delay = 60 - (pcheck_time[1] - check_time[1]);
      // document.getElementById(i + "_dly").innerHTML = "+" + delay + " Min";
      // document.getElementById(i + "_dly").style.color = "red";
      if (check_time[1] == pcheck_time[1]) {
        document.getElementById(i + "_time").style.color = "green";
      } else {
        document.getElementById(i + "_time").style.color = "red";
      }
    }

  }
}

// Station name API

function shortcut(sc_station, station_name) {
  abb = sc_station;
  document.getElementById("code").innerHTML = abb;
  document.getElementById("where").innerHTML = station_name;
  ns();
}

async function dep_station() {
  var dep_station = document.getElementById("dep_station").value;
  const station = await fetch(
    "https://gateway.apiportal.ns.nl/reisinformatie-api/api/v2/stations?q=" +
      dep_station +
      "&limit=1",
    {
      method: "GET",
      withCredentials: true,
      headers: {
        "Cache-Control": "no-cache",
        "Ocp-Apim-Subscription-Key": "d7a893b2c2e64d2595647e24f4b59fb2",
      },
    }
  );
  var name = await station.json();
  console.log(name);
  abb = name.payload[0].code;
  station_name = name.payload[0].mediumName;
  document.getElementById("where").innerHTML = dep_station;
  document.getElementById("code").innerHTML = abb;
  for (let s = 0; s < 10; s++) {
    document.getElementById(s).innerHTML = "";
    document.getElementById(s + "_time").innerHTML = "";
    document.getElementById(s + "_plat").innerHTML = "";
    document.getElementById(s + "_stp").innerHTML = "";
    document.getElementById(s + "_cat").innerHTML = "";
    document.getElementById(s + "_mesg").innerHTML = "";
    document.getElementById(s).style.backgroundColor = "";
    document.getElementById(s + "_time").style.backgroundColor = "";
    document.getElementById(s + "_plat").style.backgroundColor = "";
    document.getElementById(s + "_stp").style.backgroundColor = "";
    document.getElementById(s + "_cat").style.backgroundColor = "";
    document.getElementById(s + "_mesg").style.backgroundColor = "";
  }
  ns();
}

    
</script>