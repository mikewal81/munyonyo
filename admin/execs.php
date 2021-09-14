<?php
/* Final Year Project ISBAT University
* Candidate: Jackie Nalugga
*/
require('../libs/login_check.php');
require("../libs/config.php");
require("partials/msg.php");

$execs = fetchExecs();
$members = fetchUsers();
$no = 0;

include('partials/header.php');
?>
<!-- Page Section  -->

<!-- Details -->
<div class="details">
    <div class="upcomingEvents">
        <div class="cardHeader">
            <h2>Executive Committees</h2>
            <a href="add_exec.php"  class="btn">Add New Exec Committee</a>
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
                    <td>Start</td>
                    <td>End</td>
                    <td>Chairperson</td>
                    <td>Secretary</td>
                    <td>Director</td>
                    <td>Actions</td>
                </tr>
                </thead>
                <tbody>
                <?php
                if($execs == '0')
                {
                    echo "<td>There are no Entries in the Table</td>";
                }else {
                    foreach($execs as $row => $exec)
                    {
                        echo "<tr>";
                        $no+=1;
                        echo "<td>".$no."</td>";
                        echo "<td>".date('jS F Y', strtotime($exec['start']))."</td>";
                        echo "<td>".date('jS F Y', strtotime($exec['end']))."</td>";
                        echo "<td>";
                            foreach($members as $row => $member)
                            {
                                if($exec['cm'] == $member['id'])
                                {
                                    echo $member['f_name'].' '.$member['l_name'];
                                    }
                            }
                        echo "</td>";
                        echo "<td>";
                            foreach($members as $row => $member)
                            {
                                if($exec['sec'] == $member['id'])
                                {
                                    echo $member['f_name'].' '.$member['l_name'];
                                }
                            }
                        echo "</td>";
                        echo "<td>";
                            foreach($members as $row => $member)
                            {
                                if($exec['cm'] == $member['id'])
                                {
                                    echo $member['f_name'].' '.$member['l_name'];
                                }
                            }
                        echo "</td>";
                        echo "<td>";
                        echo "<a href='edit_exec.php?id=".$exec['id']."' class='btn-green'>Edit</a>&nbsp&nbsp&nbsp&nbsp
<a href='delete_exec.php?id=".$exec['id']."' class='btn-red'>Delete</a>";
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
