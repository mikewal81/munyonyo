<?php
require('config.php');
session_start();

//var_dump($_POST);
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
$id = $_POST['id'];

global $DB;
$sql = "UPDATE readings SET date=:date, saint=:saint, first=:first, first_details=:first_details, response=:response, response_details=:response_details, second=:second, second_details=:second_details, alleluia=:alleluia, alleluia_details=:alleluia_details, gospel=:gospel, gospel_details=:gospel_details WHERE  id=:id";

// prepare and execute Query
try{
    $data =  [
        'date'              => $date,
        'saint'             => $saint,
        'first'             => $first,
        'first_details'     => $first_details,
        'response'          => $response,
        'response_details'  => $response_details,
        'second'            => $second,
        'second_details'    => $second_details,
        'alleluia'          => $alleluia,
        'alleluia_details'  => $alleluia_details,
        'gospel'            => $gospel,
        'gospel_details'    => $gospel_details,
        'id'                => $id
    ];
    $statement = $DB->prepare($sql);
    $statement->execute($data);
    $_SESSION['success_msg'] = 'Readings Successfully Edited';
    header('Location: ../admin/readings.php');
}catch (Exception $ex){
    $_SESSION['error_msg'] = $ex->getMessage();
    header('Location: ../admin/edit_reading.php?id='.$id);
}
