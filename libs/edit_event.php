<?php
//$post = $_POST; var_dump($post); die;
require('config.php');
session_start();

//var_dump($_POST);
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
$id = $_POST['id'];

global $DB;
$sql = "UPDATE events SET owner=:owner,tel=:tel,email=:email,location=:location,date=:date,time=:time,type=:type,other=:other,details=:details,user_id=:user_id,paid=:paid,completed=:completed WHERE  id=:id";

// prepare and execute Query
try{
    $data =  [
        'owner'     => $owner,
        'tel'       => $tel,
        'email'     => $email,
        'location'  => $location,
        'date'      => $date,
        'time'      => $time,
        'type'      => $type,
        'other'     => $other,
        'details'   => $details,
        'user_id'   => $user_id,
        'paid'      => $paid,
        'completed' => $completed,
        'id'        => $id,
    ];
    $statement = $DB->prepare($sql);
    $statement->execute($data);
    $_SESSION['success_msg'] = 'Event Details Successfully Edited';
    header('Location: ../admin/events.php');
}catch (Exception $ex){
    $_SESSION['error_msg'] = $ex->getMessage();
    header('Location: ../admin/edit_event.php?id='.$id);
}