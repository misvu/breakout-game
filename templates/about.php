<?php

//Include the PHP functions to be used on the page
include('functions.php');

//Output header, navigation and login pane
outputHeader("About", $loggedIn);
outputHeaderNavigation();
outputLoginPane();
?>

    <!-- Contents of the page -->
    <div class="row">

        <div class="col-sm-3">

        </div>

        <div class="col-sm-6">

            <div class="about">
                <h1>About</h1>
                <p>Brickmania is based on the classic Brickout game concept where a player moves a paddle
                    to control a ball movement. The ball is supposed to hit the bricks one by one. When all the bricks are
                    taken down the player has conquered the level and gets to move on to the next.</p>

            </div>

        </div>

        <div class="col-sm-3">
        </div>

    </div>

<?php
//Output the footer
outputFooter();
