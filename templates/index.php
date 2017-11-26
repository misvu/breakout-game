<?php

//Include the PHP functions to be used on the page
include('functions.php');


//Output header, navigation and login pane
outputHeader("Play", $loggedInUser);
outputHeaderNavigation();
outputLoginPane();
?>

    <!-- Contents of the page -->
         <div class="row" style="height: 500px">

            <div class="col-sm-3">

            </div>

            <div class="col-sm-6">
                <?php
                  if($loggedInUser != null){
                      echo '<div id="scoreboard" width="600" height="20" style="background-color: red">SCORE: 0</div>';
                      echo '<canvas id="canvas" width="600" height="450"></canvas>';
                  }else{
                      echo '<div>Login to play game!</div>';
                  }
                ?>
             </div>

            <div class="col-sm-3">
            </div>

         </div>



<?php
outputFooter();
?>
