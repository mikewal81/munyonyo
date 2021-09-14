<?php
require('config.php');
session_start();

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
$id = $_POST['id'];

global $DB;
$sql = "UPDATE execs SET start=:start, end=:end, cm=:cm, vcm=:vcm, sec=:sec, dir=:dir, org=:org, sop=:sop, alt=:alt, ten=:ten, bass=:bass WHERE  id=:id";

// prepare and execute Query
try{
    $data =  [
        'start' => $start,
        'end'   => $end,
        'cm'    => $cm,
        'vcm'   => $vcm,
        'sec'   => $sec,
        'dir'   => $dir,
        'org'   => $org,
        'sop'   => $sop,
        'alt'   => $alt,
        'ten'   => $ten,
        'bass'  => $bass,
        'id'    =>  $id,
    ];
    $statement = $DB->prepare($sql);
    $statement->execute($data);
    $_SESSION['success_msg'] = 'Exec Committee Successfully Edited';
    header('Location: ../admin/execs.php');
}catch (Exception $ex){
    $_SESSION['error_msg'] = $ex->getMessage();
    header('Location: ../admin/edit_exec.php?id='.$id);
}

