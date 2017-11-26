<?php

//Include the PHP functions to be used on the page
include('functions.php');

//Output header, navigation and login pane
outputHeader("Play", $loggedInUser);
outputHeaderNavigation();
outputLoginPane();
?>

    <!-- Contents of the page -->
    <div class="row" style="margin-top: 80px; height: 500px" >

        <div class="col-sm-4">
            <img src="../static/images/level1.png" width="300" style="margin-left: 150px">
            <br><br>
            <div style="margin-left: 250px"><h2>LEVEL 1</h2></div>
            <p style="margin-left: 130px">"Lorem ipsum dolor sit amet,<br> Lorem ipsum dolor sit amet,<br> Lorem ipsum dolor sit amet "</p>
        </div>

        <div class="col-sm-4">
            <img src="../static/images/level2.png" width="300" style="margin-left: 70px">
            <br><br>
            <div style="margin-left: 170px"><h2>LEVEL 2</h2></div>
            <p style="margin-left: -20px">"Lorem ipsum dolor sit amet,<br> Lorem ipsum dolor sit amet,<br> Lorem ipsum dolor sit amet "</p>
        </div>

        <div class="col-sm-4">
        <img src="../static/images/level3.png" width="300" style="margin-right: 150px">
            <br><br>
            <div style="margin-left: 100px"><h2>LEVEL 3</h2></div>
            <p style="margin-right: 170px">"Lorem ipsum dolor sit amet,<br> Lorem ipsum dolor sit amet,<br> Lorem ipsum dolor sit amet "</p>
        </div>

    </div>


<?php
//Output the footer
outputFooter();
