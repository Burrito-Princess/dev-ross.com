let clicks = 0;
let press = 0;
let tf = 1;
let type = "linear";


function clickyplus() {
    clicks = clicks + 1;
    press = press + 1;
    clicky();
};

function clicky() {
    // console.clear();
    document.getElementById("deviders").innerHTML = "";
    document.getElementById("button").innerHTML = clicks;
    if (clicks % 2 == 1) {
        document.getElementById("oddity").innerHTML = "odd";
    } else {
        document.getElementById("oddity").innerHTML = "even";
    }

    let steps = 0;
    let count = 0;
    let devisions;
    let darray = [];

    for (let i = 0; i < clicks; i++) {
        steps++;
        if (clicks % steps == 0) {
            count++;
            devisions = clicks / steps;
            // console.log(devisions)
            darray.push(devisions);
        };
    }
    if (count == 2) {
        document.getElementById("primity").innerHTML = "prime";
        // document.getElementById("deviders").innerHTML = darray;
        document.getElementById("no").innerHTML = clicks + " ";
    } else if (count == 1) {
        document.getElementById("primity").innerHTML = "prime";
        // document.getElementById("deviders").innerHTML = darray;
        document.getElementById("no").innerHTML = clicks + " ";
    } else if (clicks == 0) {
        document.getElementById("primity").innerHTML = "neither";
        // document.getElementById("deviders").innerHTML = "'R'";
        document.getElementById("no").innerHTML = clicks + " ";
    } else {
        document.getElementById("primity").innerHTML = "not prime";
        // document.getElementById("deviders").innerHTML = darray;
        document.getElementById("no").innerHTML = clicks + " ";
    };
    document.getElementById("input").value = clicks;
    divarray = darray;
    tobinary_plus();
};

function reset() {
    clicks = 0;
    t = 0;
    press = 0;
    clicky();
};

function scrolly(event) {
    var y = event.deltaY;
    if (y < 0) {
        clicks++
        // console.log(clicks);
        document.getElementById("button").innerHTML = clicks;
    } else if (y > 0) {
        if (clicks > 0) {
            clicks--;
        };
        // console.log(clicks);
        document.getElementById("button").innerHTML = clicks;
    };
    clicky();
};

function darkmode() {
    // console.log("Invert!")
    if (document.getElementById("body").style.backgroundColor == "black") {
        document.getElementById("body").style.backgroundColor = "white";
        document.getElementById("body").style.color = "black";
        const collection = document.getElementsByTagName("button");
        for (let i = 0; i < collection.length; i++) {
            collection[i].style.backgroundColor = "white"
            collection[i].style.color = "black";
            collection[i].style.borderColor = "white";
        };
        document.getElementById("invert").innerHTML = "Darkmode!";
    } else {
        document.getElementById("body").style.backgroundColor = "black";
        document.getElementById("body").style.color = "grey";
        const collection = document.getElementsByTagName("button");
        for (let i = 0; i < collection.length; i++) {
            collection[i].style.backgroundColor = "black"
            collection[i].style.color = "grey";
            collection[i].style.borderColor = "grey";
        };
        document.getElementById("invert").innerHTML = "Lightmode!";
    };
};

var cancel = setInterval(incementSeconds, 1000);
var t = 0;

function incementSeconds() {
    t++; 
    let cps = press / t;
    // if (tf == true){
    //     document.getElementById("cps").innerHTML = cps;
    // };
}

function resett() {
    // console.log("T is reset");
    t = 0;
    press = 0;
}

function gone(){
    if (tf == 1){
        document.getElementById("cpsdiv").innerHTML = "";
        document.getElementById("gone").innerHTML = "Come back!";
        tf = 0;
    } else { 
        document.getElementById("cpsdiv").innerHTML = "<span id='cps'>0</span><span> Clicks per second</span><br><button onclick='resett()'>Reset 't'</button>";
        document.getElementById("gone").innerHTML = "Go away!";
        tf = 1;
    }
};

let bit = 16;
function tobinary_plus(){
    let bi_1 = clicks;
    let bi_string = [];
    
    for (let i = bit - 1; i > -1; i--){
        if (bi_1 >= 2**i){
            bi_1 = bi_1 - 2**i;
            bi_string.push(1);
        } else {
            bi_string.push(0);
        };
    };
    document.getElementById("binary").innerHTML= bi_string;
    makeobj();
    
};

function inputfield(){
    clicks = document.getElementById("input").value;
    start();
}

function bit_inputfield(){
    bit = document.getElementById("bit_input").value;
    clicky();
}

let divarray = [];
let tableobj=[];


function makeobj(){
    for (let i = 0; i < divarray.length; i++){
        tableobj[i] = {
            divider: divarray[i],
            result: clicks/divarray[i]
        }
        // console.log(tableobj);
    }
    let test = tableobj[0].divider;
    // console.log(test);
    generatetable();
}

let table;

function generatetable(){
    for(let i = 0; i < tableobj.length; i++){
        table +="<br>" + clicks + " / " + "<span style='color:red;'>" + tableobj[i].divider + "</span> = " + tableobj[i].result;
    }
    document.getElementById("deviders").innerHTML = table;
    table = "";
    tableobj = [];
    
};


/////////////////3x+1/////////////////////
let n;
let array = [];
let arrayn = [];
let x;

function start(){
    x0 = document.getElementById("input").value;
    x = x0;
    console.log(x);
    n = 0;
    array.push(x);
    arrayn.push(n);
    formula();
};

function formula(){

    // console.log(x);
    
    if (x%2 == 0){
        x = x / 2;
        // console.log(x);
        array.push(x);
        if (x == 1){
            n = n + 1;
            arrayn.push(n);
            n = n - 1;
            document.getElementById("tries").innerHTML = n + 1;
            console.log(x0);
            document.getElementById("process").innerHTML = array;
            document.getElementById("test_2").innerHTML = arrayn;
            done();
        }else{
            n = n + 1;
            arrayn.push(n);
            formula();
        };
    }else{ 
        x = 3 * x + 1;
        n = n + 1;
        // console.log(x);
        array.push(x);
        arrayn.push(n);
        formula();
    }
};
function done(){
    clicky();
}

