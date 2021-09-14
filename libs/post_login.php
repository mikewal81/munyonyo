<?php
$userName = $_POST['user_name'];
$password = $_POST['password'];

require('config.php');

// Check if User Exists in the system
global $DB;
$sql = "SELECT user_id, user_name, password FROM logins WHERE user_name = :user_name";

$statement = $DB->prepare($sql);
$statement->bindValue(':user_name', $userName);
$statement->execute();
$result = $statement->fetchAll(); //var_dump($userName, $password, $result); die;

// check if the array is empty
if(array_count_values($result) > 0)
{
    // check if passwords match
    if($result[0]['password'] == $password)
    {
        startSession($result[0]['user_id']);
        header("Location: ../admin/dashboard.php");
    }else {
        $login_err = "Your Username and Password do not match";
        header("Location: ../admin/login_error.php?error=".$login_err);
    }
}else {
    $login_err = "This User does not exist  in the System";
    header("Location: ../admin/login_error.php?error=".$login_err);
}
