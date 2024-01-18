let canvas = document.querySelector("canvas");
let context = canvas.getContext("2d");

Array.prototype.sample = function () {
  return this[Math.floor(Math.random() * this.length)];
}

let squares = [0, 100, 200, 300, 400];
let a_x;
let a_y;
let p_x;
let p_y;

let dirc = "up";
let loopcount = 0;
let score = 0;

drawAppleStart();

function drawAppleStart() {
  p_x = squares.sample();
  p_y = squares.sample();
drawApple();
}
function drawApple() {
  a_x = squares.sample();
  a_y = squares.sample();
  context.beginPath();
  context.rect(a_x, a_y, 100, 100);
  context.fillStyle = "#ff0000";
  context.closePath();
  context.fill();  
}
drawPlayerStart();

function drawPlayerStart() {
    p_x = squares.sample();
  p_y = squares.sample();
  drawPlayer();
}

function drawPlayer() {

  if (p_x == a_x && p_y == a_y) {
    drawPlayer();
  }else{
    context.beginPath();
    context.rect(p_x, p_y, 100, 100);
    context.fillStyle = "#00ff00";
    context.closePath();
    context.fill();
  }
}

let direc;
/////////////// Button ///////////////
  document.addEventListener("keydown", function (event) {
    if (event.keyCode == 37) {
      direc = "left";
      p_x = p_x - 100;
      if (p_x < 0) {
        p_x = 400;
      }
    } else if (event.keyCode == 38) {
      direc = "up";
      p_y = p_y - 100;
      if (p_y < 0) {
        p_y = 400;
      }
    } else if (event.keyCode == 39) {
      direc = "right";
      p_x = p_x + 100;
      if (p_x > 400) {
        p_x = 0;
      }
    } else if (event.keyCode == 40) {
      direc = "down";
      p_y = p_y + 100;
      if (p_y > 400) {
        p_y = 0;
      }
  }
  document.getElementById("dirc").innerHTML = "Direction: " + dirc;
  context.clearRect(0, 0, 500, 500);
  // drawApple
  context.beginPath();
  context.rect(a_x, a_y, 100, 100);
  context.fillStyle = "#ff0000";
  context.closePath();
  context.fill();
  // drawPlayer
  if (p_x == a_x && p_y == a_y) {
    score++;
    document.getElementById("score").innerHTML = "Score: " + score;
    drawApple();
  }else{
    context.beginPath();
    context.rect(p_x, p_y, 100, 100);
    context.fillStyle = "#00ff00";
    context.closePath();
    context.fill();
  }
  // drawGrid
  for (let x = 0; x < 500; x = x + 100) {
    context.moveTo(x, 0);
    context.lineTo(x, 500);
  }
  for (let y = 0; y < 500; y = y + 100) {
    context.moveTo(0, y);
    context.lineTo(500, y);
  }
  context.lineWidth = 5;
  context.strokeStyle = "#000000";
  context.stroke();
  });
    

/////////////// Timer ///////////////
setInterval(function () {
  dirc = direc;
  if (dirc == "left") {
    p_x = p_x - 100;
    if (p_x < 0) {
      p_x = 400;
    }
  } else if (dirc == "up") {
    p_y = p_y - 100;
    if (p_y < 0) {
      p_y = 400;
    }
  } else if (dirc == "right") {
    p_x = p_x + 100;
    if (p_x > 400) {
      p_x = 0;
    }
  } else if (dirc == "down") {
    p_y = p_y + 100;
    if (p_y > 400) {
      p_y = 0;
    }
  }
  document.getElementById("dirc").innerHTML = "Direction: " + dirc;
  context.clearRect(0, 0, 500, 500);
  // drawApple
  context.beginPath();
  context.rect(a_x, a_y, 100, 100);
  context.fillStyle = "#ff0000";
  context.closePath();
  context.fill();
  // drawPlayer
  if (p_x == a_x && p_y == a_y) {
    score++;
    document.getElementById("score").innerHTML = "Score: " + score;
    context.clearRect(a_x, a_y, 100, 100);
    context.fillStyle = "#00ff00";
    context.fill;
    context.beginPath();
    context.rect(p_x - 100, p_y - 100, 100, 100);
    context.fillStyle = "#00ff00";
    context.closePath();
    context.fill();

    drawApple();
  }else{
    context.beginPath();
    context.rect(p_x, p_y, 100, 100);
    context.fillStyle = "#00ff00";
    context.closePath();
    context.fill();
  }
  // drawGrid
  for (let x = 0; x < 500; x = x + 100) {
    context.moveTo(x, 0);
    context.lineTo(x, 500);
  }
  for (let y = 0; y < 500; y = y + 100) {
    context.moveTo(0, y);
    context.lineTo(500, y);
  }
  context.lineWidth = 5;
  context.strokeStyle = "#000000";
  context.stroke();
}, 1000);


context.stroke();



