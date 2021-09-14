<?php
require('config.php');
session_start();

$id = $_POST['id'];

global $DB;
$sql = "DELETE FROM execs WHERE id=:id";

// prepare and execute Query
try{
    $data =  [
        'id'     => $id,
    ];
    $statement = $DB->prepare($sql);
    $statement->execute($data);
    $_SESSION['success_msg'] = 'Exec Committee Successfully Deleted';
    header('Location: ../admin/execs.php');
}catch (Exception $ex){
    $_SESSION['error_msg'] = $ex->getMessage();
    header('Location: ../admin/delete_exec.php?id='.$id);
}