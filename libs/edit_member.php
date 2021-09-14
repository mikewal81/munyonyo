<?php
require('config.php');
session_start();

//var_dump($_POST);
$fName = $_POST['f_name'];
$lName = $_POST['l_name'];
$gender = $_POST['gender'];
$voice = $_POST['voice'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$id = $_POST['id'];

global $DB;
$sql = "UPDATE users SET f_name=:fName , l_name=:lName , gender=:gender, voice=:voice, email=:email, tel=:tel WHERE  id=:id";

// prepare and execute Query
try{
    $data =  [
        'fName'  => $fName,
        'lName'  => $lName,
        'gender' => $gender,
        'voice'  => $voice,
        'email'  => $email,
        'tel'    => $tel,
        'id'     => $id,
    ];
    $statement = $DB->prepare($sql);
    $statement->execute($data);
    $_SESSION['success_msg'] = 'Member Details Successfully Edited';
    header('Location: ../admin/members.php');
}catch (Exception $ex){
    $_SESSION['error_msg'] = $ex->getMessage();
    header('Location: ../admin/edit_member.php?id='.$id);
}

