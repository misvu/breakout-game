<?php

//Include the PHP functions to be used on the page
include('functions.php');


//Output header, navigation and login pane
outputHeader("Login", false);
outputHeaderNavigation();
outputLoginPane();
?>

<!-- Contents of the page -->
    <div class="form-group">;
    <label for="login_name">Username:</label>;
    <input type="text" class="form-control" id="login_name">;
    </div>

    <div class="form-group">;
    <label for="login_psw">Password:</label>;
    <input type="password" class="form-control" id="login_psw">;
    </div>;

    <button type="button" class="btn btn-default" onsubmit="login()">Login</button>;



<?php
outputFooter();
?>
