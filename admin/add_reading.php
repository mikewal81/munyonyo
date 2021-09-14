<?php
/* Final Year Project ISBAT University
* Candidate: Jackie Nalugga
*/
require('../libs/login_check.php');
require("../libs/config.php");
require("partials/msg.php");

include('partials/header.php');
?>

<!-- Page Section  -->
<!-- Details -->
<div class="details">
    <div class="upcomingEvents">
        <div class="cardHeader">
            <h2>Add a Daily Reading</h2>
            <a href="../admin/readings.php"  class="btn">Back to Daily Readings</a>
        </div>
        <?php
            if($success_msg != NULL){
                echo successMessage($success_msg);
            }elseif($error_msg != NULL){
                echo errorMessage($error_msg);
            }else {}
        ?>
        <form class="form" action="../libs/add_reading.php" method="post" enctype="multipart/form-data">
            <label for="date">Date: </label>
            <input type="text" id="date" name="date" class="form-control" placeholder="Enter the Date of the Reading e.g 20-08-2021" required><br>
            <label for="saint">Saint of Day: </label>
            <input type="text" id="saint" name="saint" class="form-control" placeholder="Enter Saint of the Day"><br>
            <label for="first">1st Reading: </label>
            <input type="text" id="first" name="first" class="form-control" placeholder="Enter 1st Reading" required><br>
            <label for="first_details">Full 1st Reading: </label>
            <textarea type="text" id="first_details" name="first_details" class="form-control" placeholder="Enter Full 1st Reading" required></textarea><br>
            <label for="response">Responsorial Psalm: </label>
            <input type="text" id="response" name="response" class="form-control" placeholder="Enter Responsorial Psalm" required><br>
            <label for="response_details">Full Responsorial Psalm: </label>
            <textarea type="text" id="response_details" name="response_details" class="form-control" placeholder="Enter Full Responsorial Psalm" required></textarea><br>
            <label for="second">2nd Reading: </label>
            <input type="text" id="second" name="second" class="form-control" placeholder="Enter 2nd Reading"><br>
            <label for="second_details">Full 2nd Reading: </label>
            <textarea type="text" id="second_details" name="second_details" class="form-control" placeholder="Enter Full 2nd Reading"></textarea><br>
            <label for="alleluia">Alleluia: </label>
            <input type="text" id="alleluia" name="alleluia" class="form-control" placeholder="Enter the Alleluia"><br>
            <label for="alleluia_details">Full Alleluia Proclamation: </label><br>
            <textarea type="text" id="alleluia_details" name="alleluia_details" class="form-control" placeholder="Enter Full Alleluia Proclamation"></textarea><br>
            <label for="gospel">Gospel: </label>
            <input type="text" id="gospel" name="gospel" class="form-control" placeholder="Enter the Gospel Reading" required><br>
            <label for="gospel_details">Full Gospel Reading: </label>
            <textarea type="text" id="gospel_details" name="gospel_details" class="form-control" placeholder="Enter Full Gospel Reading" required></textarea><br>
            <button type="submit" class="form-control btn-green">Submit</button>
        </form>
    </div>
</div>
<!-- End Details -->
<!-- End Page Section -->

<?php include('partials/footer.php') ?>

