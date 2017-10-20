<?php
/**
 * Author: Anna Mary Vu
 * Date: 07/10/2017
 * Time: 16:56
 */

include('functions.php');

outputHeader("My Game Website - Home");
outputBannerNavigation("Home");
?>

    <!-- Contents of the page -->
    <div id="indexPage" onload="init();">
        <canvas id="canvas" width="800" height="500"></canvas>
    </div>


<?php
outputFooter();
?>