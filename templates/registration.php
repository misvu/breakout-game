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

        <div class="col-sm-6" style="height: 600px">
            <div style="height: 530px">
                    <form name="registration_form" id="registration_form" style="padding-top: 50px">
                    <div class="form-group">
                        <label for="username"><pre>Username    </pre> </label>
                        <input type="text"  id="username" class="required">
                    </div>
                    <br>
                        <div class="form-group">
                            <label for="email"><pre>Email    </pre> </label>
                            <input type="email"  id="email" class="required">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="address"><pre>Address    </pre> </label>
                            <input type="email"  id="address" class="required">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="phone"><pre>Phone    </pre> </label>
                            <input type="email"  id="phone" class="required">
                        </div>
                        <br>
                    <div class="form-group">
                        <label for="psw"><pre>Password</pre></label>
                        <input type="password"  id="psw">
                    </div><br>
                    <button type="button" class="btn btn-success" style="margin-left: 70px" onclick="register()">Register</button>
                </form>

                <div id="sucess"></div>

            </div>

        </div>

        <div class="col-sm-3">
        </div>

    </div>


<?php
//Output the footer
outputFooter();
