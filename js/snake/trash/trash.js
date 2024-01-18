function redraw(x) {
    if (loopcount == 0) {
        loopcount = 1;
        context.clearRect(0, 0, 500, 500);
      }else if (loopcount == 1) {
        drawApple();
        loopcount = 2;
      }else if (loopcount == 2) {
        drawPlayer();
        loopcount = 3;
      } else if (loopcount == 3) {
        drawGrid();
        loopcount = 4;
      } else if (loopcount == 4) {
        loopcount = 0;
      };
  }


  //////////////////////////////
  console.log(ex_p);
    document.getElementById("score").innerHTML = "Score: " + score;
    context.beginPath();
    context.rect(a_x, a_y, p_size, p_size);
    context.fillStyle = "#00ff00";
    context.closePath();
    context.fill();
    timeout();





    //////////////////////////////
    for (let x = 0; x < squares.lenght * 100; x = x + 100) {
      context.moveTo(x, 0);
      context.lineTo(x, squares.lenght * 100);
    }
    for (let y = 0; y < squares.lenght * 100; y = y + 100) {
      context.moveTo(0, y);
      context.lineTo(squares.lenght * 100, y);
    }
    context.lineWidth = 5;
    context.strokeStyle = "#000000";



    //////////////////////////////
    drawGrid
  for (let x = 0; x < squares.lenght * 100; x = x + 100) {
    context.moveTo(x, 0);
    context.lineTo(x, squares.lenght * 100);
  }
  for (let y = 0; y < squares.lenght * 100; y = y + 100) {
    context.moveTo(0, y);
    context.lineTo(squares.lenght * 100, y);
  }

  //////////////////////////////

  let growLength = 3;
for(let i = 1, last = this.segments[this.segments.length - 1]; i < growLength; i++)
  this.segments[this.segments.length] = last;


  //////////////////////////////
  drawGrid();
function drawGrid() {
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
}


//////////////////////////////
function timeout() {
  if (dirc == "up") {
    context.beginPath();
    context.rect(p_x, p_y + p_size * score, p_size, p_size);
    context.closePath();
    context.fillStyle = "#00ff00";
    context.fill();
    setTimeout(function () {
      timeout();
    }, tik);
  } else if (dirc == "down") {
    context.beginPath();
    context.rect(p_x, p_y - p_size * score, p_size, p_size);
    context.closePath();
    context.fillStyle = "#00ff00";
    context.fill();
    setTimeout(function () {
      timeout();
    }, tik);
  } else if (dirc == "left") {
    context.beginPath();
    context.rect(p_x + p_size * score, p_y, p_size, p_size);
    context.closePath();
    context.fillStyle = "#00ff00";
    context.fill();
    setTimeout(function () {
      timeout();
    }, tik);
  } else if (dirc == "right") {
    context.beginPath();
    context.rect(p_x - p_size * score, p_y, p_size, p_size);
    context.closePath();
    context.fillStyle = "#00ff00";
    context.fill();
    setTimeout(function () {
      timeout();
    }, tik);
  } else {
    console.log("nope");
  }
}

//////////////////////////////
for (let i = 0; i < score; i++) {
  let pos_x_array = p_x_pos.reverse();
  let pos_y_array = p_y_pos.reverse();
  context.beginPath();
  context.rect(pos_x_array[i - 1], pos_y_array[i - 1], p_size, p_size);
  context.fillStyle = "#00ff00";
  context.closePath();
  context.fill();
}

//////////////////////////////
for (let i = 0; i < score; i++) {
  let pos_x_array = p_x_pos.reverse();
  let pos_y_array = p_y_pos.reverse();
  context.beginPath();
  context.rect(pos_y_array[i], pos_x_array[i], p_size, p_size);
  context.fillStyle = "#00ff00";
  context.closePath();
  context.fill();
}

////////////////
<?php
    if ($result->setFetchMode(PDO::FETCH_ASSOC) > 0) {
      foreach ($result as $row) {

        echo "<table>";
        echo "<tr><th>" . "User" . "</th>" . "<th>" . "Score" . "</th>" . "</tr>";
        echo "<tr><th>" . $row["name"] . "</th>" . "<th>" . $row["score"] . "</th>" . "</tr>";
        echo "</table>";
      }
    }
    ?>


    ////////////////////////////
    context.fillStyle = i % 2 ? "#00de00" : "hotpink";