<?php
 // Check is user is logged in
session_start();
if(!(isset($_SESSION["logged_in"])) || $_SESSION["logged_in"] != true) {
    header("location: ../admin/login.php");
}


