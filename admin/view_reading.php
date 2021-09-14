<?php
/* Final Year Project ISBAT University
* Candidate: Jackie Nalugga
*/
require('../libs/login_check.php');
require("../libs/config.php");
require("partials/msg.php");

$id = $_GET['id'];
$reading = fetchReadingById($id);

include('partials/header.php');
?>

<!-- Page Section  -->
<!-- Details -->
<div class="details">
    <div class="upcomingEvents">
        <div class="cardHeader">
            <h2>View Daily Reading</h2>
            <a href="../admin/readings.php"  class="btn">Back to Daily Readings</a>
        </div>
        <?php
            if($success_msg != NULL){
                echo successMessage($success_msg);
            }elseif($error_msg != NULL){
                echo errorMessage($error_msg);
            }else {}
        ?>
        
        <div class="table-wrapper">
            <h3 >Date: </h3>
            <p><?php echo date('jS F Y', strtotime($reading[0]['date'])); ?></p><br>
            <h3>Saint of Day: </h3>
            <p><?php echo $reading[0]['saint']; ?></p><br>
            <h3>1st Reading: </h3>
            <p><?php  echo $reading[0]['first'] ?></p><br>
            <h3>Full 1st Reading: </h3>
            <p><?php echo $reading[0]['first_details'] ?></p><br>
            <h3>Responsorial Psalm: </h3>
            <p><?php echo $reading[0]['response'] ?></p><br>
            <h3>Full Responsorial Psalm: </h3>
            <p><?php echo $reading[0]['response_details'] ?></p><br>
            <h3>2nd Reading: </h3>
            <p></p><br>
            <h3>Full 2nd Reading: </h3>
            <p><?php echo $reading[0]['second_details'] ?></p><br>
            <h3>Alleluia: </h3>
            <p><?php echo $reading[0]['alleluia'] ?></p><br>
            <h3>Full Alleluia Proclamation: </h3>
            <p><?php echo $reading[0]['alleluia_details'] ?></p><br>
            <h3>Gospel: </h3>
            <p><?php echo $reading[0]['gospel'] ?></p><br>
            <h3 >Full Gospel Reading: </h3>
            <p><?php echo $reading[0]['gospel_details'] ?></p><br>
            <a href="edit_reading.php?id=<?php echo $reading[0]['id'] ?>" class="btn-green">Edit Reading</a>
        </div>
    </div>
</div>
<!-- End Details -->
<!-- End Page Section -->

<?php include('partials/footer.php') ?>


