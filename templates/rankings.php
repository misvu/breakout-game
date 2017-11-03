<?php

include('functions.php');

outputHeader("Rankings", false);
outputHEaderNavigation("rankings");
outputLoginPane();
?>

    <!-- Contents of the ranking page -->
    <div class="row">

        <div class="col-sm-3">
        </div>

        <div class="col-sm-6">
            <div class="rankingtable">
                <table>
                    <tr>
                        <th>Ranking</th>
                        <th>Name</th>
                        <th>Score</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Anna</td>
                        <td>678</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Robin</td>
                        <td>547</td>
                    </tr>

                    <tr>
                        <td>3.</td>
                        <td>Joe</td>
                        <td>469</td>
                    </tr>

                </table>
            </div>
        </div>

        <div class="col-sm-3">
        </div>

    </div>

<?php
outputFooter();
?>