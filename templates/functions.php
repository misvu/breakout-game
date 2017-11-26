<?php

$loggedInUser = isset($_COOKIE["loggedInUser"]) && strlen($_COOKIE["loggedInUser"]) > 0 ? $_COOKIE["loggedInUser"] : null;
//Outputs the opening body tag and the header for the page
function outputHeader($title, $loggedInUser){
    echo '<!DOCTYPE html>';
    echo '<html lang="en">';

    /* <head> */
    echo '<head>';
    echo '<title>' . $title . '</title>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="description" content="A breakout game called Brickmania">';
    echo '<meta name="keywords" content="breakout game, BrickMania">';
    echo '<meta name="author" content="Anna Mary Vu">';
    echo '<link href="../css/style.css" rel="stylesheet" >';
    echo '<link href="../css/bootstrap.min.css" rel="stylesheet">';
    echo '<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Gloria+Hallelujah" rel="stylesheet">';
    echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
    echo ' <script src="../js/bootstrap.min.js"></script>';
    echo '<script src="../js/main.js"></script>';



    echo '</head>';

    /* <body> */
    echo '<body>';
    echo '<div id="pageContainer">';

    /* <header> */
    echo '<header>';
    echo '<div class="container-fluid">';
    echo '<div class="row">';
    echo '<div class="col-sm-3">';
    echo '<div id="menuIcon" onclick="openNav()"><div class="menuText">MENU</div>&#9776;</div>';
    echo '</div>';
    echo '<div class="col-sm-6">';
    if ($page_title = 'index'){
        echo '<div class="banner shake">BRICKMANIA</div>';
    }

    echo '</div>';
    echo '<div class="col-sm-3">';
    if ($loggedInUser != null){
        echo '<div id="login"><span>Logged in as ' . $loggedInUser . '</span>';
        echo '<div><button type=button id="logout" class="btn btn-success" onclick="logout()">Log out</button></div> ';
        echo '</div>';
    }else{
        echo '<div id="login"><span class="pointer" onclick="openLogNav()"> <button type="button" class="btn btn-success">Login</button></span>';
    }

    echo '</div>';
    echo '</div>';
    echo '</header>';
}


/* Outputs header containing the web site logo and site navigation bar. */
function outputHeaderNavigation(){

    echo '<nav id="mySideNav" class="sidenav leftNav">';
    echo '<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>';
    echo '<a href="index.php">Play</a>';
    echo '<a href="about.php">About</a>';
    echo '<a href="levels.php">Levels</a>';
    echo '<a href="rankings.php">Rankings</a>';
    echo '<a href="registration.php">Register</a>';
    echo '</nav>';
}

function outputLoginPane(){

    echo '<nav id="loginRegPane" class="sidenav loginNav">';
    echo '<a href="javascript:void(0)" class="closebtn" onclick="closeLogNav()">&times;</a>';
    echo '<div class="form-group">';
    echo '<label for="user">Username:</label>';
    echo '<input type="text" class="form-control" id="user">';
    echo '</div>';
    echo '<div class="form-group">';
    echo '<label for="password">Password:</label>';
    echo '<input type="password" class="form-control" id="password">';
    echo '</div>';
    echo '<button type="submit" onclick="login()" class="btn btn-default" id="login_user">Login</button>';
    echo '<div id="error_container"></div>';
    echo '</nav>';

}


//Outputs footer section and closing body and HTML tag
function outputFooter(){
    echo '<footer>';
    echo '<div class="row">';
    echo '<div class="col-sm-3">';
    echo '</div>';
    echo '<div class="col-sm-6">';
    echo '<p>Brickmania by<br>Anna Vu</p>';
    echo '</div>';
    echo '<div class="col-sm-3">';
    echo '</div>';
    echo '</div>'; //end of .row
    echo '</footer>';

    echo '</div>'; // end of .container-fluid
    echo '</div>'; // end of .pageContainer

    echo '</body>';
    echo '</html>';
}
