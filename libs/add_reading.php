<?php
session_start();
require('config.php');

//// Get post data from form
$a = explode('-',$_POST["date"]);
$date = $a[2].'-'.$a[1].'-'.$a[0];
$saint = $_POST['saint'];
$first = $_POST['first'];
$first_details = $_POST['first_details'];
$response = $_POST['response'];
$response_details = $_POST['response_details'];
$second = $_POST['second'];
$second_details = $_POST['second_details'];
$alleluia = $_POST['alleluia'];
$alleluia_details = $_POST['alleluia_details'];
$gospel = $_POST['gospel'];
$gospel_details = $_POST['gospel_details'];

// Connect to Database
global $DB;
$sql = "INSERT INTO readings(saint, first, first_details, response, response_details, second, second_details, alleluia, alleluia_details, gospel, gospel_details) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

// Prepare and execute database query
try{
    $statement = $DB->prepare($sql);
    $statement->execute([$saint,$first,$first_details,$response,$response_details,$second,$second_details,$alleluia,$alleluia_details,$gospel,$gospel_details]);

    $_SESSION['success_msg'] = 'New Daily Reading Added Successfully';
    header('Location: ../admin/readings.php');
}catch (Exception $ex){
    $_SESSION['error_msg'] = $ex->getMessage();
    header('Location: ../admin/add_reading.php');
}
