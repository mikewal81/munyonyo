<?php
/* Final Year Project ISBAT University
* Candidate: Jackie Nalugga
*/
require('../libs/login_check.php');
require("../libs/config.php");
$member_id = $_GET['id'];
$member = fetchMemberById($member_id);

include('partials/header.php');
?>

    <!-- Page Section  -->
    <!-- Details -->
    <div class="details">
        <div class="upcomingEvents">
            <div class="cardHeader">
                <h2>Edit Member</h2>
                <a href="../admin/members.php"  class="btn">Back to Members</a>
            </div>
            <form class="form" action="../libs/edit_member.php" method="post" enctype="multipart/form-data">
                <label for="f_name">First Name: </label>
                <input type="text" id="f_name" name="f_name" class="form-control" value="<?php echo $member[0]['f_name'] ?>"><br>
                <label for="l_name">Sur Name: </label>
                <input type="text" id="l_name" name="l_name" class="form-control" value="<?php echo $member[0]['l_name'] ?>"><br>
                <label for="gender">Gender: </label>
                <select name="gender" class="form-control">
                    <option value="">Select Gender</option>
                    <option value="M" <?php if($member[0]['gender'] == 'M') echo 'selected="selected"'; ?>>Male</option>
                    <option value="F" <?php if($member[0]['gender'] == 'F') echo 'selected="selected"'; ?>>Female</option>
                </select><br>
                <label for="voice">Voice: </label>
                <select name="voice" class="form-control">
                    <option value="">Select Voice</option>
                    <option value="1" <?php if($member[0]['voice'] == '1') echo 'selected="selected"'; ?>>Soprano</option>
                    <option value="2" <?php if($member[0]['voice'] == '2') echo 'selected="selected"'; ?>>Alto</option>
                    <option value="3" <?php if($member[0]['voice'] == '3') echo 'selected="selected"'; ?>>Tenor</option>
                    <option value="4" <?php if($member[0]['voice'] == '4') echo 'selected="selected"'; ?>>Bass</option>
                    <option value="" <?php if($member[0]['voice'] == '') echo 'selected="selected"'; ?>>Not Defined</option>
                </select><br>
                <label for="email">Email: </label>
                <input type="text" id="email" name="email" class="form-control" value="<?php echo $member[0]['email'] ?>"><br>
                <label for="tel">Tel No : </label>
                <input type="text" id="tel" name="tel" class="form-control" value="<?php echo $member[0]['tel'] ?>"><br>
                <input type="hidden" id="id" name="id" value="<?php echo $member[0]['id'] ?>">
                <button type="submit" class="form-control btn-green">Edit</button>
            </form>
        </div>
    </div>
    <!-- End Details -->
    <!-- End Page Section -->

    <?php include('partials/footer.php') ?>
