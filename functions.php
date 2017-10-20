<?php
/**
 * Author: Anna Mary Vu
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
    echo '<link rel="stylesheet" href="styles.css">';
    echo '<script src="myScripts.js"></script>';
    echo '</head>';
    echo '<body>';
}

/* Outputs the banner and the navigation bar
    The selected class is applied to the page that matches the page name variable */
function outputBannerNavigation($pageName){
    //Output banner and first part of navigation
    echo '<div class="banner">My Game Website Logo</div>';
    echo '<div class="navigation">';

    //Array of pages to link to
    $linkNames = array("Play", "About", "Levels");
    $linkAddresses = array("index.php", "about.php", "levels.php");

    //Outputs the navigation
    for($x = 0; $x < count($linkNames); $x++){
        echo '<a ';
        if($linkNames[$x] == $pageName){
            echo 'class="selected" ';
        }
        echo 'href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a>';
    }
    echo '</div>';
}

//Outputs footer section and closing body and HTML tag
function outputFooter(){
    echo '<footer>';

    echo '</footer>';
    echo '</body>';
    echo '</html>';
}