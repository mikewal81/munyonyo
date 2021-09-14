<?php
$success_msg = NULL;
$error_msg = NULL;

if(isset($_SESSION['success_msg'])){
    $success_msg = $_SESSION['success_msg'];
    unset($_SESSION['success_msg']);
}

if(isset($_SESSION['error_msg'])){
    $success_msg = $_SESSION['error_msg'];
    unset($_SESSION['error_msg']);
}

