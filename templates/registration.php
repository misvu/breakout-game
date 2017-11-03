<?php

//Include the PHP functions to be used on the page
include('functions.php');

//Output header, navigation and login pane
outputHeader("Play", false);
outputHeaderNavigation();
outputLoginPane();
?>

    <!-- Contents of the page -->
    <div class="row" style="height: 500px">

        <div class="col-sm-3">
        </div>

        <div class="col-sm-6" style="height: 600px">
            <div style="height: 530px">

                <form style="padding-top: 50px">
                    <div class="form-group">
                        <label for="name"><pre>Name    </pre> </label>
                        <input type="text"  id="name">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="city"><pre>City    </pre></label>
                        <input type="text"  id="city">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email"><pre>Email   </pre></label>
                        <input type="email"  id="email">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="psw"><pre>Password</pre></label>
                        <input type="password"  id="psw">
                    </div><br>
                    <button type="button" class="btn btn-success" style="margin-left: 70px">Register</button>
                </form>

            </div>

        </div>

        <div class="col-sm-3">
        </div>

    </div>


<?php
//Output the footer
outputFooter();
