var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");

var ballRadius = 10;

var x = canvas.width/2;
var y = canvas.height-30;
var dx = -2;
var dy = -2;
var rightPressed = false;
var leftPressed = false;


var paddleWidth = 10;
var paddleHeight = 75;
var paddleX = (canvas.width - paddleWidth)/2;

function drawBall(){
    ctx.beginPath();
    ctx.arc(x, y, ballRadius, 0, Math.PI*2, false);
    ctx.fillStyle="green";
    ctx.fill();
    ctx.closePath();
}

function drawPaddle(){
    ctx.beginPath();
    ctx.rect(paddleX, Canvas.height-paddleHeight, paddleWidth, paddleHeight);
    ctx.fillStyle="black";
    ctx.fill();
    ctx.closePath();
}

function draw(){
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    drawBall();
    x += dx;
    y += dy;

    if(x + dx > canvas.width - drawBall() || x + dx < ballRadius){
        dx = -dx;
    }

    if(y + dy > canvas.height - ballRadius|| y + dy < ballRadius) {
        dy = -dy;
    }

    if(rightPressed && paddleX < canvas.width-paddleX){

    }
}
document.addEventListener("keydown", keyDownHandler, false);
document.addEventListener("keyup", keyDownHandler, false);


function keyDownHandler(e){
    if(e.keyCode == 39){
        rightPressed = true;
    }else if(e.keyCode == 37){
        leftPressed = true;
    }
}

function keyUpHandler(e){
    if(e.keyCode == 39){
        rightPressed = false;
    }else if(e.keyCode = 37){
        leftPressed = false;
    }
}
setInterval(draw, 10);
drawPaddle();
