<?php
/* Final Year Project ISBAT University
* Candidate: Jackie Nalugga
*/
require('../libs/login_check.php');
require("../libs/config.php");
require("partials/msg.php");

$event_id = $_GET['id'];
$event = fetchEventById($event_id);
$members = fetchUsers();

include('partials/header.php');
?>

    <!-- Page Section  -->
    <!-- Details -->
    <div class="details">
        <div class="upcomingEvents">
            <div class="cardHeader">
                <h2>Edit Event</h2>
                <a href="../admin/events.php"  class="btn">Back to Events</a>
            </div>
            <?php
                if($success_msg != NULL){
                    echo successMessage($success_msg);
                }elseif($error_msg != NULL){
                    echo errorMessage($error_msg);
                }else {}
            ?>
            <form class="form" action="../libs/edit_event.php" method="post" enctype="multipart/form-data">
                <label for="type">Type: </label>
                <select name="type" class="form-control">
                    <option value="">Select Event Type?</option>
                    <option value="M" <?php if($event[0]['type'] == 'M') echo 'selected="selected"'; ?>>Mass</option>
                    <option value="W"  <?php if($event[0]['type'] == 'W') echo 'selected="selected"'; ?>>Wedding</option>
                    <option value="B" <?php if($event[0]['type'] == 'B') echo 'selected="selected"'; ?>>Baptism</option>
                    <option value="F" <?php if($event[0]['type'] == 'F') echo 'selected="selected"'; ?>>Funeral</option>
                    <option value="OD" <?php if($event[0]['type'] == 'OD') echo 'selected="selected"'; ?>>Ordination</option>
                    <option value="O" <?php if($event[0]['type'] == 'O') echo 'selected="selected"'; ?>>Other</option>
                    <option value="N" <?php if($event[0]['type'] == 'N') echo 'selected="selected"'; ?>>Not Defined</option>
                </select><br>
                <label for="other">Other <span style="color: red">[Fill in if Event Type is Other]</span>: </label>
                <textarea id="other" name="other" class="form-control"><?php echo $event[0]['other'] ?></textarea><br>
                <label for="owner">Owner: </label>
                <input type="text" id="owner" name="owner" class="form-control" value="<?php echo $event[0]['owner'] ?>"><br>
                <label for="tel">Owner's Tel: </label>
                <input type="text" id="tel" name="tel" class="form-control" value="<?php echo $event[0]['tel'] ?>"><br>
                <label for="email">Owner's Email: </label>
                <input type="text" id="email" name="email" class="form-control" value="<?php echo $event[0]['email'] ?>"><br>
                <label for="location">Location: </label>
                <input type="text" id="location" name="location" class="form-control"  value="<?php echo $event[0]['location'] ?>"><br>
                <label for="date">Date: </label>
                <input type="text" id="date" name="date" class="form-control" value="<?php echo date('j-m-y', strtotime($event[0]['date']))?>"><br>
                <label for="time">Time: </label>
                <input type="text" id="time" name="time" class="form-control" value="<?php echo date('g:i a', strtotime($event[0]['time'])) ?>"><br>
                <label for="details">Details: </label>
                <textarea id="details" name="details" class="form-control"><?php echo $event[0]['details'] ?></textarea><br>
                <label for="paid">Payment: </label>
                <select name="paid" class="form-control">
                    <option value="">Has Event been paid for?</option>
                    <option value="2" <?php if($event[0]['paid'] == '2') echo 'selected="selected"'; ?>>Paid</option>
                    <option value="3" <?php if($event[0]['paid'] == '3') echo 'selected="selected"'; ?>>Unpaid</option>
                </select><br>
                <label for="completed">Completed: </label><br>
                <select name="completed" class="form-control">
                    <option value="">Has Event been Completed?</option>
                    <option value="2" <?php if($event[0]['completed'] == '2') echo 'selected="selected"'; ?>>Completed</option>
                    <option value="3" <?php if($event[0]['completed'] == '3') echo 'selected="selected"'; ?>>Not Completed</option>
                </select>
                <label for="user_id">Booked By: </label>
                <select name="user_id" class="form-control">
                    <option value="">Select who booked Event</option>
                    <?php
                    foreach($members as $row => $member)
                    {
                        echo '<option value="'.$member['id'].'" '.(($event[0]['user_id'] == $member['id']) ? "selected" : "").'>'.$member['f_name'].' '.$member['l_name'].'</option>';
                    }
                    ?>
                </select><br>
                <input type="hidden" id="id" name="id" value="<?php echo $event[0]['id'] ?>">
                <button type="submit" class="form-control btn-green">Edit</button>
            </form>
        </div>
    </div>
    <!-- End Details -->
    <!-- End Page Section -->

    <?php include('partials/footer.php') ?>
