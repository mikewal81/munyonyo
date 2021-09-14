<?php
/* Final Year Project ISBAT University
* Candidate: Jackie Nalugga
*/
require_once('constants.php');
require_once('common_functions.php');

// basic options for PDO
$dboptions = array(
    PDO::ATTR_PERSISTENT => false,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  utf8',
);

// connect to the server
try {
    $DB = new PDO(DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_DATABASE, DB_HOST_USERNAME,
        DB_HOST_PASSWORD, $dboptions);
}catch (Exception $ex){
    echo pg_errorMessage($ex->getMessage());
    die;
}