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
                <h2>Add Member</h2>
                <a href="../admin/members.php"  class="btn">Back to Members</a>
            </div>
            <?php
                if($success_msg != NULL){
                    echo successMessage($success_msg);
                }elseif($error_msg != NULL){
                    echo errorMessage($error_msg);
                }else {}
            ?>
            <form class="form" action="../libs/add_member.php" method="post" enctype="multipart/form-data">
                <label for="f_name">First Name: </label>
                <input type="text" id="f_name" name="f_name" class="form-control"
                       placeholder="Enter Choir Member's First Name" required><br>
                <label for="l_name">Sur Name: </label>
                <input type="text" id="l_name" name="l_name" class="form-control"
                       placeholder="Enter Choir Member's Sur Name" required><br>
                <label for="gender">Gender: </label>
                <select name="gender" class="form-control" required>
                    <option value="">Select Gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select><br>
                <label for="voice">Voice: </label>
                <select name="voice" class="form-control" required>
                    <option value="">Select Voice</option>
                    <option value="1">Soprano</option>
                    <option value="2">Alto</option>
                    <option value="3">Tenor</option>
                    <option value="4">Bass</option>
                    <option value="">Do Not Define</option>
                </select><br>
                <label for="email">Email: </label>
                <input type="text" id="email" name="email" class="form-control"
                       placeholder="Enter Choir Member's Email Address" required><br>
                <label for="tel">Tel No : </label>
                <input type="text" id="tel" name="tel" class="form-control"
                       placeholder="Enter Choir Member's Tel No:" required><br>
                <button type="submit" class="form-control btn-green">Submit</button>
            </form>
        </div>
    </div>
    <!-- End Details -->
    <!-- End Page Section -->

    <?php include('partials/footer.php') ?>
