let canvas = document.querySelector("canvas");
let context = canvas.getContext("2d");

Array.prototype.sample = function () {
  return this[Math.floor(Math.random() * this.length)];
};

let squares = [
  0, 25, 50, 75, 100, 125, 150, 175, 200, 225, 250, 275, 300, 325, 350, 375,
  400, 425, 450, 475,
];

let a_x;
let a_y;
let p_x;
let p_y;

let dirc = "up";
let score = 0;
let p_size = 25;
let g_size = 20;
let tik = 450;

let snakeSegments = [];

drawAppleStart();
drawPlayerStart();

function drawAppleStart() {
  p_x = squares.sample();
  p_y = squares.sample();
  drawApple();
}

function drawApple() {
    context.beginPath();
    context.rect(a_x, a_y, p_size, p_size);
    context.fillStyle = "#ff0000";
    context.closePath();
    context.fill();
  }

function drawPlayerStart() {
  p_x = squares.sample();
  p_y = squares.sample();
  drawPlayer();
}

function drawPlayer() {
    context.clearRect(0, 0, p_size * g_size, p_size * g_size);
    drawApple(); // Draw the apple first
  
    for (let i = 0; i < snakeSegments.length; i++) {
      const segment = snakeSegments[i];
      context.beginPath();
      context.rect(segment.x, segment.y, p_size, p_size);
      context.fillStyle = "#00ff00";
      context.closePath();
      context.fill();
    }
  }
  

function reDrawPlayer() {
  context.clearRect(0, 0, p_size * g_size, p_size * g_size);
  // drawApple
  context.beginPath();
  context.rect(a_x, a_y, p_size, p_size);
  context.fillStyle = "#ff0000";
  context.closePath();
  context.fill();
  // drawPlayer
  drawPlayer();
}

function timeout() {
  if (dirc == "up") {
    p_y -= p_size;
    if (p_y < 0) {
      p_y = squares[squares.length - 1];
    }
  } else if (dirc == "down") {
    p_y += p_size;
    if (p_y > squares[squares.length - 1]) {
      p_y = 0;
    }
  } else if (dirc == "left") {
    p_x -= p_size;
    if (p_x < 0) {
      p_x = squares[squares.length - 1];
    }
  } else if (dirc == "right") {
    p_x += p_size;
    if (p_x > squares[squares.length - 1]) {
      p_x = 0;
    }
  } else {
    console.log("nope");
  }

  document.getElementById("dirc").innerHTML = "Direction: " + dirc;
  reDrawPlayer();

  if (checkCollision()) {
    endGame();
    return;
  }

  if (p_x == a_x && p_y == a_y) {
    score++;
    document.getElementById("score").innerHTML = "Score: " + score;
    drawApple();
    increaseSnakeLength();
  }

  setTimeout(function () {
    timeout();
  }, tik);
}

/////////////// Button ///////////////
document.addEventListener("keydown", function (event) {
  if (event.keyCode == 37 && dirc != "right") {
    dirc = "left";
  } else if (event.keyCode == 38 && dirc != "down") {
    dirc = "up";
  } else if (event.keyCode == 39 && dirc != "left") {
    dirc = "right";
  } else if (event.keyCode == 40 && dirc != "up") {
    dirc = "down";
  }
});

/////////////// Timer ///////////////
timeout();

function checkCollision() {
  // Check if the snake collides with itself
  for (let i = 1; i < snakeSegments.length; i++) {
    if (snakeSegments[i].x == p_x && snakeSegments[i].y == p_y) {
      return true;
    }
  }
  return false;
}

function increaseSnakeLength() {
    // Get the last segment of the snake
    const lastSegment = snakeSegments[snakeSegments.length - 1];
  
    // Calculate the position of the new segment based on the direction
    let newSegment = {};
    if (dirc === "up") {
      newSegment.x = lastSegment.x;
      newSegment.y = lastSegment.y - p_size;
    } else if (dirc === "down") {
      newSegment.x = lastSegment.x;
      newSegment.y = lastSegment.y + p_size;
    } else if (dirc === "left") {
      newSegment.x = lastSegment.x - p_size;
      newSegment.y = lastSegment.y;
    } else if (dirc === "right") {
      newSegment.x = lastSegment.x + p_size;
      newSegment.y = lastSegment.y;
    }
  
    // Add the new segment to the snake's body
    snakeSegments.push(newSegment);
  }
  

function endGame() {
  // Game over logic
  console.log("Game over");
}
