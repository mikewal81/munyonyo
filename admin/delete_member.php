<?php
/* Final Year Project ISBAT University
* Candidate: Jackie Nalugga
*/
require('../libs/login_check.php');
require("../libs/config.php");
require("partials/msg.php");
$id = $_GET['id'];

include('partials/header.php');
?>


    <!-- Page Section  -->

    <!-- Details -->
    <div class="details">
        <div class="upcomingEvents">
            <div class="cardHeader">
                <h2>Delete Member?</h2>
                <a href="../admin/members.php"  class="btn">Back to Members</a>
            </div>
            <?php
                if($success_msg != NULL){
                    echo successMessage($success_msg);
                }elseif($error_msg != NULL){
                    echo errorMessage($error_msg);
                }else {}
            ?>
            <form class="form" action="../libs/delete_member.php" method="post" enctype="multipart/form-data">
                <h2>Are you sure you want to delete this Member?</h2>
                <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
                <button type="submit" class="form-control btn-green">Yes</button>
                <button type="reset" class="form-control btn-red">No</button>
            </form>
        </div>
    </div>
    <!-- End Details -->
    <!-- End Page Section -->
    <?php include('partials/footer.php') ?>
