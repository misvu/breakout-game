<?php
/**
 * Date: 07/10/2017
 * Time: 17:04
 */

//Ouputs the header for the page and opening body tag
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
    echo '<script src="script.js"></script>';
    echo '</head>';
    echo '<body>';
    echo '<div id="pageContainer">';
    echo '<header>';
}


/* Outputs the banner and the navigation bar
    The selected class is applied to the page that matches the page name variable */
function outputBannerNavigation($pageName){
    //Output banner and first part of navigation
    echo '<div class="banner">BRICK-O-MANIA!</div>';
    echo '<div class="navigation">';

    //Array of pages to link to
    $linkNames = array("Play", "About", "Levels", "Rankings");
    $linkAddresses = array("index.php", "about.php", "levels.php", "rankings.php");

    //Outputs the navigation
    for($x = 0; $x < count($linkNames); $x++){
        echo '<a ';
        if($linkNames[$x] == $pageName){
            echo 'class="selected" ';
        }
        echo 'href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a>';
    }
    echo '</div>';
    echo '</header>';
}

//Outputs footer section and closing body and HTML tag
function outputFooter(){
    echo '<footer>';
    echo '<p>FOOTER</p>';
    echo '</footer>';
    echo '</div>';
    echo '</body>';
    echo '</html>';
}
