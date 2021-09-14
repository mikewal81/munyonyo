<?php
session_start();
require('config.php');

//// Get post data from form
$type = $_POST['type'];
$other = $_POST['other'];
$owner = $_POST['owner'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$location = $_POST['location'];
$a = explode('-',$_POST["date"]);
$date = $a[2].'-'.$a[1].'-'.$a[0];
$time = date("H:i", strtotime($_POST['time']));
$details = $_POST['details'];
$paid = $_POST['paid'];
$completed = $_POST['completed'];
$user_id = $_POST['user_id'];

// Connect to Database
global $DB;
$sql = "INSERT INTO events(owner,tel,email,location,date,time,type,other,details,user_id,paid,completed) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

// Prepare and execute database query
try{
    $statement = $DB->prepare($sql);
    $statement->execute([$owner,$tel,$email,$location,$date,$time,$type,$other,$details,$user_id,$paid,$completed]);

    $_SESSION['success_msg'] = 'New Event Added Successfully';
    header('Location: ../admin/events.php');
}catch (Exception $ex){
    $_SESSION['error_msg'] = $ex->getMessage();
    header('Location: ../admin/add_event.php');
}