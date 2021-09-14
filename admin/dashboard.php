<?php
/* Final Year Project ISBAT University
* Candidate: Jackie Nalugga
*/

require('../libs/login_check.php');
require("../libs/config.php");

$events = fetchUpcomingEvents();
$countMembers = countUsers();
$countEvents = countEvents();
$countCompletedEvents = countCompletedEvents();
$countIncompleteEvents= countIncompleteEvents();
$no = 0;

include('partials/header.php');
?>

        <!-- Page Section  -->
        <!-- Cards -->
        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers"><?php echo $countMembers ?></div>
                    <div class="cardName">Members</div>
                </div>
                <a href="members.php">
                    <div class="iconBox">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                </a>
            </div>
            <div class="card">
                <div>
                    <div class="numbers"><?php echo $countEvents?></div>
                    <div class="cardName">Total Events</div>
                </div>
                <a href="events.php">
                    <div class="iconBox">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                    </div>
                </a>
            </div>
            <div class="card">
                <div>
                    <div class="numbers"><?php echo $countCompletedEvents ?></div>
                    <div class="cardName">Completed Events</div>
                </div>
                <a href="#">
                    <div class="iconBox-Green">
                        <i class="fa fa-calendar-check" aria-hidden="true"></i>
                    </div>
                </a>
            </div>
            <div class="card">
                <div>
                    <div class="numbers"><?php echo $countIncompleteEvents ?></div>
                    <div class="cardName">Incomplete Events</div>
                </div>
                <a href="#">
                    <div class="iconBox-Red">
                        <i class="fa fa-calendar-times" aria-hidden="true"></i>
                    </div>
                </a>
            </div>
        </div>
        <!-- End Cards -->

        <!-- Details -->
        <div class="details">
            <div class="upcomingEvents">
                <div class="cardHeader">
                    <h2>Upcoming Events</h2>
                    <a href="../admin/events.php"  class="btn">View All</a>
                </div>
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
                            echo "<a href='edit_event.php?id=".$event['id']."' class='btn-green'>Edit</a>
&nbsp&nbsp&nbsp&nbsp<a href='delete_event.php?id=".$event['id']."' class='btn-red'>Delete</a>";
                            echo "</td>";
                            echo "<tr>";
                        }
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Details -->
        <!-- End Page Section -->
        <!-- Page Specific Scripts -->

        <!-- End Page Specific Scripts -->
<?php include('partials/footer.php') ?>