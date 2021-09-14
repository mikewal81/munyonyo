<?php
// $post = $_POST; var_dump($post); die;
session_start();
require('config.php');

// Get Post data from form
$a = explode('-',$_POST["start"]);
$start = $a[2].'-'.$a[1].'-'.$a[0];
$b = explode('-',$_POST["end"]);
$end = $b[2].'-'.$b[1].'-'.$b[0];
$cm = $_POST['cm'];
$vcm = $_POST['vcm'];
$sec = $_POST['sec'];
$dir = $_POST['dir'];
$org = $_POST['org'];
$sop = $_POST['sop'];
$alt = $_POST['alt'];
$ten = $_POST['ten'];
$bass = $_POST['bass'];

if ($a[2] > date('Y'))
{
    $_SESSION['error_msg'] = 'Sorry you cannot enter a date greater than this year';
    header('Location: ../admin/add_exec.php');
}

// Connect to Database
global $DB;
$sql = "INSERT INTO execs (start, end, cm, vcm, sec, dir, org, sop, alt, ten, bass) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

// Prepare and execute database query
try{
    $statement = $DB->prepare($sql);
    $statement->execute([$start,$end,$cm,$vcm,$sec,$dir,$org,$sop,$alt,$ten,$bass]);

    $_SESSION['success_msg'] = 'New Executive Committee Added Successfully';
    header('Location: ../admin/execs.php');
}catch (Exception $ex){
    //$_SESSION['error_msg'] = 'Add New Executive Committee Failed';
    $_SESSION['error_msg'] = $ex->getMessage();
    header('Location: ../admin/add_exec.php');
}
