<?php
 //$post = $_POST;  var_dump($post); die;
 require('config.php');
session_start();

$id = $_POST['id'];

global $DB;
$sql = "DELETE FROM events WHERE id=:id";

// prepare and execute Query
try {
    $data = [
        'id' => $id,
    ];
    $statement = $DB->prepare($sql);
    $statement->execute($data);
    $_SESSION['success_msg'] = 'Event Successfully Deleted';
    header('Location: ../admin/events.php');
} catch (Exception $ex) {
    $_SESSION['error_msg'] = $ex->getMessage();
    header('Location: ../admin/delete_event.php?id=' . $id);
}