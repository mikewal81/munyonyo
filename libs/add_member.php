<?php
session_start();
require('config.php');

//// Get post data from form
$fName = $_POST['f_name'];
$lName = $_POST['l_name'];
$gender = $_POST['gender'];
$voice = $_POST['voice'];
$email = $_POST['email'];
$tel = $_POST['tel'];

// Connect to Database
global $DB;
$sql = "INSERT INTO users(f_name, l_name, gender, voice, email, tel) VALUES (?,?,?,?,?,?)";

// Prepare and execute database query
try{
    $statement = $DB->prepare($sql);
    $statement->execute([$fName,$lName,$gender,$voice,$email,$tel]);

    $_SESSION['success_msg'] = 'New Member Added Successfully';
    header('Location: ../admin/members.php');
}catch (Exception $ex){
    $_SESSION['error_msg'] = $ex->getMessage();
    header('Location: ../admin/add_member.php');
}