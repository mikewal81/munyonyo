<?php
/* Final Year Project ISBAT University
* Candidate: Jackie Nalugga
*/
require('../libs/login_check.php');
require("../libs/config.php");
require('partials/msg.php');
$members = fetchUsers();

include('partials/header.php');
?>

    <!-- Page Section  -->
    <!-- Details -->
    <div class="details">
        <div class="upcomingEvents">
            <div class="cardHeader">
                <h2>Add Event</h2>
                <a href="../admin/events.php"  class="btn">Back to Events</a>
            </div>
            <?php
                if($success_msg != NULL){
                    echo successMessage($success_msg);
                }elseif($error_msg != NULL){
                    echo errorMessage($error_msg);
                }else {}
            ?>
            <form class="form" action="../libs/add_event.php" method="post" enctype="multipart/form-data">
                <label for="type">Type: </label>
                <select name="type" class="form-control" required>
                    <option value="">Select the Event Type?</option>
                    <option value="M">Mass</option>
                    <option value="W">Wedding</option>
                    <option value="B">Baptism</option>
                    <option value="F">Funeral</option>
                    <option value="OD">Ordination</option>
                    <option value="O">Other</option>
                    <option value="N">Not Defined</option>
                </select><br>
                <label for="other">Other: </label>
                <textarea id="other" name="other" class="form-control" placeholder="Fill in if the Event Type selected is OTHER"></textarea><br>
                <label for="owner">Owner: </label>
                <input type="text" id="owner" name="owner" class="form-control" placeholder="Enter Event Owner's Name" required><br>
                <label for="tel">Owner's Tel: </label>
                <input type="text" id="tel" name="tel" class="form-control" placeholder="Owner's tel No. e.g +256 123 456789" required><br>
                <label for="email">Owner's Email: </label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Owner's Email Address" required><br>
                <label for="location">Location: </label>
                <input type="text" id="location" name="location" class="form-control"  placeholder="Enter Event Location" required><br>
                <label for="date">Date: </label>
                <input type="text" id="date" name="date" class="form-control" placeholder="When will the event be held e.g 12-12-2024" required><br>
                <label for="time">Time: </label>
                <input type="text" id="time" name="time" class="form-control" placeholder="At What time will the Event be held e.g 10:00 AM" required><br>
                <label for="details">Details: </label>
                <textarea id="details" name="details" class="form-control" placeholder="Enter the Event's Details e.g the Program, Uniform etc" required></textarea><br>
                <label for="paid">Payment: </label>
                <select name="paid" class="form-control" required>
                    <option value="">Has Event been paid for?</option>
                    <option value="2">Yes</option>
                    <option value="3">No</option>
                </select><br>
                <label for="completed">Completed: </label><br>
                <select name="completed" class="form-control" required>
                    <option value="">Has the Event Ended?</option>
                    <option value="2">Yes</option>
                    <option value="3">Not Yet</option>
                </select><br>
                <label for="user_id">Booked By: </label>
                <select name="user_id" class="form-control">
                    <option value="">Select who booked Event</option>
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
