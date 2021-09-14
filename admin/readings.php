<?php
/* Final Year Project ISBAT University
* Candidate: Jackie Nalugga
*/
require('../libs/login_check.php');
require("../libs/config.php");
require("partials/msg.php");

$readings = fetchReadings();
$no = 0;

include('partials/header.php');
?>
<!-- Page Section  -->

<!-- Details -->
<div class="details">
    <div class="upcomingEvents">
        <div class="cardHeader">
            <h2>Daily Readings</h2>
            <a href="add_reading.php"  class="btn">Add a Daily Reading</a>
        </div>
        <?php
            if($success_msg != NULL){
                echo successMessage($success_msg);
            }elseif($error_msg != NULL){
                echo errorMessage($error_msg);
            }else {}
        ?>
        <div class="table-wrapper">
            <table>
                <thead>
                <tr>
                    <td>No.</td>
                    <td>Date</td>
                    <td>1st Reading</td>
                    <td>Response</td>
                    <td>2nd Reading</td>
                    <td>Gospel</td>
                    <td>Actions</td>
                </tr>
                </thead>
                <tbody>
                <?php
                if($readings == '0')
                {
                    echo "<td>There are no Entries in the Table</td>";
                }else {
                    foreach($readings as $row => $reading)
                    {
                        echo "<tr>";
                        $no+=1;
                        echo "<td>".$no."</td>";
                        echo "<td>".$reading['date']."</td>";
                        echo "<td>".$reading['first']."</td>";
                        echo "<td>".$reading['response']."</td>";
                        echo "<td>".$reading['second']."</td>";
                        echo "<td>".$reading['gospel']."</td>";
                        echo "<td>";
                        echo "<a href='view_reading.php?id=".$reading['id']."' class='btn-orange'>View</a>&nbsp&nbsp&nbsp&nbsp<a href='edit_reading.php?id=".$reading['id']."' class='btn-green'>Edit</a>&nbsp&nbsp&nbsp&nbsp<a href='delete_reading.php?id=".$reading['id']."' class='btn-red'>Delete</a>";
                        echo "</td>";
                        echo "<tr>";
                    }
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
    <!-- End Details -->
    <!-- End Page Section -->
    <!-- Page Specific Scripts -->

    <!-- End Page Specific Scripts -->
    <?php include('partials/footer.php') ?>
