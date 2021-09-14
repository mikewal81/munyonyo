<?php
/* Final Year Project ISBAT University
* Candidate: Jackie Nalugga
*/
require('../libs/login_check.php');
require("../libs/config.php");
require('partials/msg.php');

include('partials/header.php');
$id = $_GET['id'];
$exec  = fetchExecById($id);
$members = fetchUsers();
?>

<!-- Page Section  -->
<!-- Details -->
<div class="details">
    <div class="upcomingEvents">
        <div class="cardHeader">
            <h2>Edit Exec Committee</h2>
            <a href="../admin/execs.php"  class="btn">Back to Exec Committees</a>
        </div>
        <?php
            if($success_msg != NULL){
                echo successMessage($success_msg);
            }elseif($error_msg != NULL){
                echo errorMessage($error_msg);
            }else {}
        ?>
        <form class="form" action="../libs/edit_exec.php" method="post" enctype="multipart/form-data">
            <label for="start">Start Date : </label>
            <input id="start" name="start" class="form-control" value="<?php echo date('d-m-Y',
                strtotime($exec[0]['start'])) ?>"><br>
            <label for="end">End Date : </label>
            <input id="end" name="end" class="form-control" value="<?php echo date('d-m-Y',
                strtotime($exec[0]['end'])) ?>"><br>
            <label for="cm">Chairperson: </label>
            <select name="cm" class="form-control">
                <option value="">Select Chairperson</option>
                <?php
                    foreach($members as $row => $member)
                    {

                        echo '<option value="'.$member['id'].'" '.(($exec[0]['cm'] == $member['id']) ? "selected" : "").
                            '>'.$member['f_name'].' '.$member['l_name'].'</option>';
                    }
                ?>
            </select><br>
            <label for="vcm">Vice Chairperson: </label>
            <select name="vcm" class="form-control">
                <option value="">Select Vice Chairperson</option>
                <?php
                foreach($members as $row => $member)
                {
                    echo '<option value="'.$member['id'].'" '.(($exec[0]['vcm'] == $member['id']) ? "selected" : "").'>'
                        .$member['f_name'].' '.$member['l_name'].'</option>';
                }
                ?>
            </select><br>
            <label for="sec">Secretary: </label>
            <select name="sec" class="form-control">
                <option value="">Select Secretary</option>
                <?php
                foreach($members as $row => $member)
                {
                    echo '<option value="'.$member['id'].'" '.(($exec[0]['sec'] == $member['id']) ? "selected" : "").'>'
                        .$member['f_name'].' '.$member['l_name'].'</option>';
                }
                ?>
            </select><br>
            <label for="dir">Director: </label>
            <select name="dir" class="form-control">
                <option value="">Select Choir Director</option>
                <?php
                foreach($members as $row => $member)
                {
                    echo '<option value="'.$member['id'].'" '.(($exec[0]['dir'] == $member['id']) ? "selected" : "").'>'
                        .$member['f_name'].' '.$member['l_name'].'</option>';
                }
                ?>
            </select><br>
            <label for="org">Organist: </label>
            <select name="org" class="form-control">
                <option value="">Select Organist</option>
                <?php
                foreach($members as $row => $member)
                {
                    echo '<option value="'.$member['id'].'" '.(($exec[0]['org'] == $member['id']) ? "selected" : "").'>'
                        .$member['f_name'].' '.$member['l_name'].'</option>';
                }
                ?>
            </select><br>
            <label for="sop">Soprano Voice Rep: </label>
            <select name="sop" class="form-control">
                <option value="">Select Soprano Voice Rep</option>
                <?php
                foreach($members as $row => $member)
                {
                    echo '<option value="'.$member['id'].'" '.(($exec[0]['sop'] == $member['id']) ? "selected" : "").'>'
                        .$member['f_name'].' '.$member['l_name'].'</option>';
                }
                ?>
            </select><br>
            <label for="alt">Alto Voice Rep: </label>
            <select name="alt" class="form-control">
                <option value="">Select Alto Voice Rep</option>
                <?php
                foreach($members as $row => $member)
                {
                    echo '<option value="'.$member['id'].'" '.(($exec[0]['alt'] == $member['id']) ? "selected" : "").'>'
                        .$member['f_name'].' '.$member['l_name'].'</option>';
                }
                ?>
            </select><br>
            <label for="ten">Tenor Voice Rep: </label>
            <select name="ten" class="form-control">
                <option value="">Select Tenor Voice Rep</option>
                <?php
                foreach($members as $row => $member)
                {
                    echo '<option value="'.$member['id'].'" '.(($exec[0]['ten'] == $member['id']) ? "selected" : "").'>'
                        .$member['f_name'].' '.$member['l_name'].'</option>';
                }
                ?>
            </select><br>
            <label for="bass">Bass Voice Rep: </label>
            <select name="bass" class="form-control">
                <option value="">Select Bass Voice Rep</option>
                <?php
                foreach($members as $row => $member)
                {
                    echo '<option value="'.$member['id'].'" '.(($exec[0]['bass'] == $member['id']) ? "selected" : "").'>'
                        .$member['f_name'].' '.$member['l_name'].'</option>';
                }
                ?>
            </select><br>
            <input type="hidden" id="id" name="id" value="<?php echo $exec[0]['id'] ?>">
            <button type="submit" class="form-control btn-green">Add</button>
        </form>
    </div>
</div>
<!-- End Details -->
<!-- End Page Section -->

<?php include('partials/footer.php') ?>

