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
    echo '<link rel="stylesheet" href="style.css">';
    //google font
    echo '<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">';
    echo '<script src="script.js"></script>';
    echo '</head>';
    echo '<body>';
    echo '<div id="pageContainer">';
    echo '<header>';
}


/* Outputs header containing the web site logo and site navigation bar. */
function outputHeaderNavigation($pageName){
    echo '<div class="banner">BRICKMANIA</div>';

    //Outputs the navigation
    echo '<nav id="mySidenav" class="sidenav">';
    echo '<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>';
    echo '<a href="index.php">Play</a>';
    echo '<a href="about.php">About</a>';
    echo '<a href="levels.php">Levels</a>';
    echo '<a href="rankings.php">Rankings</a>';
    echo '</nav>';

   //open the side Menu
    echo '<span id="menuIcon" style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>';

    echo '</header>';
}

//Outputs footer section and closing body and HTML tag
function outputFooter(){
    echo '<footer>';
    echo '<p>Copyright &copy; Misvu 2017</p>';
    echo '</footer>';
    echo '</div>';
    echo '</body>';
    echo '</html>';
}
