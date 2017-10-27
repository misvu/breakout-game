<?php

//Outputs the header for the page and opening body tag
function outputHeader($title){
    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '<title>' . $title . '</title>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="description" content="Home for game website .....">';
    echo '<meta name="keywords" content="game, school project">';
    echo '<meta name="author" content="Anna Mary Vu">';
    echo '<link href="css/style.css" rel="stylesheet" >';
    echo '<link href="css/bootstrap.min.css" rel="stylesheet">';
    //google font
    echo '<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">';
    echo '<script src="js/main.js"></script>';
    echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>';
    echo ' <script src="js/bootstrap.min.js"></script>';
    echo '</head>';
    echo '<body>';
    echo '<div id="pageContainer">';
    echo '<header>';
    echo '<div class="container-fluid">';
    echo '<div class="row">';
    echo '<div class="col-sm-3">';
    echo '<div id="menuIcon" onclick="openNav()">&#9776;</div>';
    echo '</div>';
    echo '<div class="col-sm-6">';
    echo '<div class="banner">BRICKMANIA</div>';
    echo '</div>';
    echo '<div class="col-sm-3">';
    echo '<div id="loginRegister" onclick="openLogNav()"><span>Login | Register</span></div>';
    echo '</div>';
    echo '</div>';
    echo '</header>';
}


/* Outputs header containing the web site logo and site navigation bar. */
function outputHeaderNavigation(){

    //Outputs the navigation
    echo '<nav id="mySideNav" class="sidenav">';
    echo '<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>';
    echo '<a href="index.php">Play</a>';
    echo '<a href="about.php">About</a>';
    echo '<a href="levels.php">Levels</a>';
    echo '<a href="rankings.php">Rankings</a>';
    echo '</nav>';
}

function outputLoginPane(){
    echo '<div>';
    echo '<nav id="loginRegPane" class="loginNav">';
    echo '<a href="javascript:void(0)" class="closeLogReg" onclick="closeLogNav()">&times;</a>';
    echo '</div>';
}


//Outputs footer section and closing body and HTML tag
function outputFooter(){
    echo '<footer>';
    echo '<p>Copyright &copy; Misvu 2017</p>';
    echo '</footer>';
    echo '</div>';
    echo '</div>'; //end of .container-fluid
    echo '</body>';
    echo '</html>';
}
