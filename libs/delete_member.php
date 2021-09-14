<?php
require('config.php');
session_start();

$id = $_POST['id'];

global $DB;
$sql = "DELETE FROM users WHERE id=:id";

// prepare and execute Query
try{
    $data =  [
        'id'     => $id,
    ];
    $statement = $DB->prepare($sql);
    $statement->execute($data);
    $_SESSION['success_msg'] = 'Member Successfully Deleted';
    header('Location: ../admin/members.php');
}catch (Exception $ex){
    $_SESSION['error_msg'] = $ex->getMessage();
    header('Location: ../admin/delete_member.php?id='.$id);
}
