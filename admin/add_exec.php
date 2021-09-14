<?php
/* Final Year Project ISBAT University
* Candidate: Jackie Nalugga
*/
require('../libs/login_check.php');
require("../libs/config.php");
require('partials/msg.php');

include('partials/header.php');
$members = fetchUsers();
?>

<!-- Page Section  -->
<!-- Details -->
<!-- Details -->
<div class="details">
    <div class="upcomingEvents">
        <div class="cardHeader">
            <h2>Add Exec Committee</h2>
            <a href="../admin/execs.php"  class="btn">Back to Exec Committees</a>
        </div>
        <?php
            if($success_msg != NULL){
                echo successMessage($success_msg);
            }elseif($error_msg != NULL){
                echo errorMessage($error_msg);
            }else {}
        ?>
        <form class="form" action="../libs/add_exec.php" method="post" enctype="multipart/form-data">
            <label for="start">Start Date : </label>
            <input id="start" name="start" class="form-control" placeholder="Enter Start Date e.g 12-08-2020" required><br>
            <label for="end">End Date : </label>
            <input id="end" name="end" class="form-control" placeholder="Enter End Date e.g 12-08-2022" required><br>
            <label for="cm">Chairperson: </label>
            <select name="cm" class="form-control" required>
                <option value="">Select Chairperson</option>
                <?php
                    foreach($members as $row => $member)
                    {
                        echo '<option value="'.$member['id'].'">'.$member['f_name'].' '.$member['l_name'].'</option>';
                    }
                ?>
            </select><br>
            <label for="vcm">Vice Chairperson: </label>
            <select name="vcm" class="form-control" required>
                <option value="">Select Vice Chairperson</option>
                <?php
                foreach($members as $row => $member)
                {
                    echo '<option value="'.$member['id'].'">'.$member['f_name'].' '.$member['l_name'].'</option>';
                }
                ?>
            </select><br>
            <label for="sec">Secretary: </label>
            <select name="sec" class="form-control" required>
                <option value="">Select Secretary</option>
                <?php
                foreach($members as $row => $member)
                {
                    echo '<option value="'.$member['id'].'">'.$member['f_name'].' '.$member['l_name'].'</option>';
                }
                ?>
            </select><br>
            <label for="dir">Director: </label>
            <select name="dir" class="form-control" required>
                <option value="">Select Choir Director</option>
                <?php
                foreach($members as $row => $member)
                {
                    echo '<option value="'.$member['id'].'">'.$member['f_name'].' '.$member['l_name'].'</option>';
                }
                ?>
            </select><br>
            <label for="org">Organist: </label>
            <select name="org" class="form-control" required>
                <option value="">Select Organist</option>
                <?php
                foreach($members as $row => $member)
                {
                    echo '<option value="'.$member['id'].'">'.$member['f_name'].' '.$member['l_name'].'</option>';
                }
                ?>
            </select><br>
            <label for="sop">Soprano Voice Rep: </label>
            <select name="sop" class="form-control" required>
                <option value="">Select Soprano Voice Rep</option>
                <?php
                foreach($members as $row => $member)
                {
                    echo '<option value="'.$member['id'].'">'.$member['f_name'].' '.$member['l_name'].'</option>';
                }
                ?>
            </select><br>
            <label for="alt">Alto Voice Rep: </label>
            <select name="alt" class="form-control" required>
                <option value="">Select Alto Voice Rep</option>
                <?php
                foreach($members as $row => $member)
                {
                    echo '<option value="'.$member['id'].'">'.$member['f_name'].' '.$member['l_name'].'</option>';
                }
                ?>
            </select><br>
            <label for="ten">Tenor Voice Rep: </label>
            <select name="ten" class="form-control" required>
                <option value="">Select Tenor Voice Rep</option>
                <?php
                foreach($members as $row => $member)
                {
                    echo '<option value="'.$member['id'].'">'.$member['f_name'].' '.$member['l_name'].'</option>';
                }
                ?>
            </select><br>
            <label for="bass">Bass Voice Rep: </label>
            <select name="bass" class="form-control" required>
                <option value="">Select Bass Voice Rep</option>
                <?php
                foreach($members as $row => $member)
                {
                    echo '<option value="'.$member['id'].'">'.$member['f_name'].' '.$member['l_name'].'</option>';
                }
                ?>
            </select><br>
            <button type="submit" class="form-control btn-green">Add</button>
        </form>
    </div>
</div>
<!-- End Details -->
<!-- End Page Section -->

<?php include('partials/footer.php') ?>

