<?php
/* Final Year Project ISBAT University
* Candidate: Jackie Nalugga
*/
require('../libs/login_check.php');
require("../libs/config.php");
require("partials/msg.php");

$events = fetchEvents();
$no = 0;

include('partials/header.php');
?>

    <!-- Page Section  -->

    <!-- Details -->
    <div class="details">
        <div class="upcomingEvents">
            <div class="cardHeader">
                <h2>Events</h2>
                <a href="add_event.php"  class="btn">Add an Event</a>
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
                        <td>Type</td>
                        <td>Location</td>
                        <td>Date</td>
                        <td>Time</td>
                        <td>Status</td>
                        <td>Actions</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($events == '0')
                    {
                        echo "<td>There are no Entries in the Table</td>";
                    }else {
                        foreach($events as $row => $event)
                        {
                            echo "<tr>";
                            $no+=1;
                            echo "<td>".$no."</td>";
                            switch($event['type']){
                                case 'M': echo "<td>Mass</td>";
                                    break;
                                case 'W': echo "<td>Wedding</td>";
                                    break;
                                case 'B': echo "<td>Baptism</td>";
                                    break;
                                case 'F': echo "<td>Funeral</td>";
                                    break;
                                case 'OD': echo "<td>Ordination</td>";
                                    break;
                                case 'O': echo "<td>Other</td>";
                                    break;
                                case 'N': echo "<td>Not Defined</td>";
                                    break;
                            }
                            echo "<td>".$event['location']."</td>";
                            echo "<td>".date('jS F Y', strtotime($event['date']))."</td>";
                            echo "<td>".date('g:i a', strtotime($event['time']))."</td>";
                            switch($event['paid']){
                                case 2: echo "<td>Paid</td>";
                                    break;
                                case 3: echo "<td>Unpaid</td>";
                                    break;
                            }
                            echo "<td>";
                            echo "<a href='edit_event.php?id=".$event['id']."' class='btn-green'>Edit</a>&nbsp&nbsp&nbsp&nbsp<a href='delete_event.php?id=".$event['id']."' class='btn-red'>Delete</a>";
                            echo "</td>";
                            echo "<tr>";
                        }
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End Details -->
    <!-- End Page Section -->
    <!-- Page Specific Scripts -->

    <!-- End Page Specific Scripts -->
<?php include('partials/footer.php') ?>