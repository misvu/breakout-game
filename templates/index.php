<?php

include('functions.php');

outputHeader("Play", false);
outputHeaderNavigation();
outputLoginPane();
?>

    <!-- Contents of the page -->
         <div class="row" style="height: 500px">

            <div class="col-sm-3">

            </div>

            <div class="col-sm-6">
                  <canvas id="canvas" width="600" height="450"></canvas>
             </div>

            <div class="col-sm-3">
            </div>

         </div>



<?php
outputFooter();
?>