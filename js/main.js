//temporary put score here for test purpose.
var score = 0;


window.onload = function() {
    var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");

    var ballRadius = 10;
    var x = canvas.width / 2;
    var y = canvas.height - 30;
    var dx = -2;
    var dy = -2;

    var scoreBoardHeight = 35;
    var paddleWidth = 75;
    var paddleHeight = 10;
    var paddleX = (canvas.width - paddleWidth) / 2;

    function drawBall() {
        ctx.beginPath();
        ctx.arc(x, y, ballRadius, 0, Math.PI * 2, false);
        ctx.fillStyle = "black";
        ctx.fill();
        ctx.closePath();
    }

    function drawPaddle() {
        ctx.beginPath();
        ctx.rect(paddleX, canvas.height - (paddleHeight + 40), paddleWidth, paddleHeight);
        ctx.fillStyle = "black";
        ctx.fill();
        ctx.closePath();
    }


    var brickRowCount = 3;
    var brickColumnCount = 5;
    var brickWidth = 75;
    var brickHeight = 20;
    var brickPadding = 10;
    var brickOffsetTop = 30;
    var brickOffsetLeft = 30;

    function brickCollection() {
        var bricks = [];
        for(i=0; i<brickColumnCount; i++) {
            bricks[i] = [];
            for(k=0; k<brickRowCount; k++) {
                bricks[i][k] = { x: 0, y: 0 };
            }
        }
        return bricks;
    }

    function drawBricks() {
        var bricks = brickCollection();
        for(c=0; c<brickColumnCount; c++) {
            for(r=0; r<brickRowCount; r++) {
                var brickX = (c*(brickWidth+brickPadding))+brickOffsetLeft;
                var brickY = (r*(brickHeight+brickPadding))+brickOffsetTop;
                bricks[c][r].x = brickX;
                bricks[c][r].y = brickY;
                ctx.beginPath();
                ctx.rect(brickX, brickY, brickWidth, brickHeight);
                ctx.fillStyle = "black";
                ctx.fill();
                ctx.closePath();
            }
        }
    }

    function update() {
        updatePositions();
        handleCollisions();
        draw();

    }

    function updatePositions() {
        x += dx;
        y += dy;

        if (x + dx > canvas.width - ballRadius || x + dx < ballRadius) {
            dx = -dx;
        }

        if (y + dy < (ballRadius + scoreBoardHeight)) {
            dy = -dy;
        } else if (y + dy > canvas.height - (ballRadius + scoreBoardHeight + paddleHeight)) {
            if (x > paddleX && x < paddleX + paddleWidth) {
                dy = -dy;
            }
        }
    }

    function drawScoreBoardPane() {
        ctx.beginPath();
        ctx.rect(0, 0, canvas.width, scoreBoardHeight);
        ctx.fillStyle = "black";
        ctx.fill();
        ctx.closePath();
    }


    function draw() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        drawPaddle();
        drawBall();
        drawBricks();
    }

    function handleCollisions(){
        // var enemies = [];
        // enemies.forEach(function(enemy){
        //     if(isHit()){
        //         incrementScore();
        //     }
        // });
    }

    function isHit(ballRect, enemyRect){
        //check for intersection
        return true;
    }

    function incrementScore() {
        score += 15;
    }


    function mouseMoveHandler(e) {
        var relativeX = e.clientX - canvas.offsetLeft;
        if(relativeX > 0 && relativeX < canvas.width) {
            paddleX = relativeX;
        }
    }
    document.addEventListener("mousemove", mouseMoveHandler, false);
    setInterval(update, 10);

};

function endGame() {
    var username = getUserName();
    if(!username){
        console.log("user cookie not present.");
        return;
    }
    var key = username + ".highscore";
    var previousScore = JSON.parse(localStorage.getItem(key)) || 0;
    console.log(previousScore);
    if(score > previousScore){
        localStorage.setItem(key, JSON.stringify(score));
    }
}


function getUserName() {
        var name = "loggedInUser=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return null;
}

function displayErrorMessage(msg){
    $("#error_container").html(msg);
}

/* ----- LOCAL STORAGE ----- */
function register() {

    var username = $("#username").val();
    var email = $("#email").val();
    var address = $("#address").val();
    var phone = $("#phone").val();
    var password = $("#psw").val();
    if(!localStorage.username){
        localStorage.setItem(username, JSON.stringify({email: email, password: password, address: address, phone: phone}));
        document.getElementById("sucess").innerHTML = "Registration sucessful"
    }else{
        document.getElementById("sucess").innerHTML = "Username not available"
    }
}

function login() {
    var username = $("#user").val();
    var password = $("#password").val();

    if (localStorage.getItem(username) == null) {
        displayErrorMessage("User does not exist");
    }else {
        var userDetails = JSON.parse(localStorage.getItem(username));
        if(userDetails.password == password){
            document.cookie = "loggedInUser=" + username + "; expires=" + new Date(Date.now() + 1000 * 60 * 60) + ";";
            window.location.reload(true);
        } else {
            displayErrorMessage("Wrong password.");
        }
    }
}

function logout(){
    document.cookie = "loggedInUser=; expires=;";
    window.location.reload(true);
}

/* ----- SITE NAVIGATION ----- */

function openNav() {
    document.getElementById("mySideNav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySideNav").style.width = "0";
}

function openLogNav() {
    document.getElementById("loginRegPane").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeLogNav() {
    document.getElementById("loginRegPane").style.width = "0";
}


