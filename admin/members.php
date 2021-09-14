<?php
/* Final Year Project ISBAT University
* Candidate: Jackie Nalugga
*/
require('../libs/login_check.php');
require("../libs/config.php");
require("partials/msg.php");

$members = fetchUsers();
$no = 0;

include('partials/header.php');
?>
    <!-- Page Section  -->

    <!-- Details -->
    <div class="details">
        <div class="upcomingEvents">
            <div class="cardHeader">
                <h2>Choir Members</h2>
                <a href="add_member.php"  class="btn">Add New Member</a>
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
                        <td>First Name</td>
                        <td>Sur Name</td>
                        <td>Gender</td>
                        <td>Voice</td>
                        <td>Tel</td>
                        <td>Actions</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($members == '0')
                    {
                        echo "<td>There are no Entries in the Table</td>";
                    }else {
                        foreach($members as $row => $member)
                        {
                            echo "<tr>";
                            $no+=1;
                            echo "<td>".$no."</td>";
                            echo "<td>".$member['f_name']."</td>";
                            echo "<td>".$member['l_name']."</td>";
                            switch($member['gender']){
                                case 'M': echo "<td>Male</td>";
                                    break;
                                case 'F': echo "<td>Female</td>";
                                    break;
                            }
                            switch($member['voice']){
                                case 1: echo "<td>Soprano</td>";
                                    break;
                                case 2: echo "<td>Alto</td>";
                                    break;
                                case 3: echo "<td>Tenor</td>";
                                    break;
                                case 4: echo "<td>Bass</td>";
                                    break;
                                default: echo "<td>Not Defined</td>";
                                    break;
                            }
                            echo "<td>".$member['tel']."</td>";
                            echo "<td>";
                            echo "<a href='edit_member.php?id=".$member['id']."' class='btn-green'>Edit</a>
&nbsp&nbsp&nbsp&nbsp<a href='delete_member.php?id=".$member['id']."' class='btn-red'>Delete</a>";
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