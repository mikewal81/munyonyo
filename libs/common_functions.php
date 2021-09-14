<?php
/* Final Year Project ISBAT University
* Candidate: Jackie Nalugga
*/

function startSession($id)
{
    global $DB;
    $sql = "SELECT id, f_name, l_name FROM users WHERE 1 AND id = :id";

    try{
        $statement = $DB->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $result = $statement->fetchAll();
    }catch (Exception $ex){
        $_SESSION['error_msg'] = errorMessage($ex->getMessage());
        $result = 0;
    }

    // Start Session
    session_start();

    // Set Session Variables
    $_SESSION['user_id'] = $result[0]['id'];
    $_SESSION['f_name'] = $result[0]['f_name'];
    $_SESSION['l_name'] = $result[0]['l_name'];
    $_SESSION['logged_in'] = true;

}

function getHomeURL() {
    return HTTP_SERVER . SITE_DIR;
}

function errorMessage($str) {
    return '<div style="width:50%; margin:0 auto; border:2px solid #000; padding:2px; color: #fff; background-color: #f00000; 
margin-top:10px; text-align:center;">' . $str . '</div>';
}

function successMessage($str) {
    return '<div style="width:50%; margin:0 auto; border:2px solid #000; padding:2px; color: #fff; background-color: #008000; 
margin-top:10px; text-align:center;">' . $str . '</div>';
}

function countUsers(){
    global $DB;
    $sql = "SELECT * FROM users";

    try{
        $statement = $DB->query($sql);
        $statement->execute();
        $count = count($statement->fetchAll());
    }catch (Exception $ex){
        echo errorMessage($ex->getMessage());
        $_SESSION['error_msg'] = errorMessage($ex->getMessage());
        $count = 0;
    }
    return $count;
}

function countEvents(){
    global $DB;
    $sql = "SELECT * FROM events";

    try{
        $statement = $DB->query($sql);
        $statement->execute();
        $count = count($statement->fetchAll());
    }catch (Exception $ex){
        $_SESSION['error_msg'] = errorMessage($ex->getMessage());
        $count = 0;
    }
    return $count;
}

function countCompletedEvents(){
    global $DB;
    $sql = "SELECT * FROM events WHERE completed = '2'";

    try{
        $statement = $DB->query($sql);
        $statement->execute();
        $count = count($statement->fetchAll());
    }catch (Exception $ex){
        $_SESSION['error_msg'] = errorMessage($ex->getMessage());
        $count = 0;
    }
    return $count;
}

function countIncompleteEvents(){
    global $DB;
    $sql = "SELECT * FROM events WHERE completed = '3'";

    try{
        $statement = $DB->query($sql);
        $statement->execute();
        $count = count($statement->fetchAll());
    }catch (Exception $ex){
        $_SESSION['error_msg'] = errorMessage($ex->getMessage());
        $count = 0;
    }
    return $count;
}

// Events
function fetchEvents(){
    global $DB;
    $sql = "SELECT * FROM events ORDER BY date DESC";

    try{
        $statement = $DB->query($sql);
        $statement->execute();
        $results = $statement->fetchAll();
    }catch (Exception $ex){
        $_SESSION['error_msg'] = errorMessage($ex->getMessage());
        $results = 0;
    }
    return $results;
}

function fetchUpcomingEvents(){
    global $DB;
    $sql = "SELECT *  FROM events ORDER BY date ASC LIMIT 5";

    try{
        $statement = $DB->query($sql);
        $statement->execute();
        $results = $statement->fetchAll();
    }catch (Exception $ex){
        $_SESSION['error_msg'] = errorMessage($ex->getMessage());
        $results = 0;
    }
    return $results;
}

function fetchUpcoming2Events(){
    global $DB;
    $sql = "SELECT *  FROM events ORDER BY date ASC LIMIT 2";

    try{
        $statement = $DB->query($sql);
        $statement->execute();
        $results = $statement->fetchAll();
    }catch (Exception $ex){
        $_SESSION['error_msg'] = errorMessage($ex->getMessage());
        $results = 0;
    }
    return $results;
}

function fetchEventById($id){
    global $DB;
    $sql = "SELECT * FROM events WHERE 1 AND id = :id";

    try{
        $statement = $DB->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $result = $statement->fetchAll();
    }catch (Exception $ex){
        $_SESSION['error_msg'] = errorMessage($ex->getMessage());
        $result = 0;
    }
    return $result;
}

// Users Table
function fetchUsers(){
    global $DB;
    $sql = "SELECT * FROM users ORDER BY id DESC";

    try{
        $statement = $DB->query($sql);
        $statement->execute();
        $results = $statement->fetchAll();
    }catch (Exception $ex){
        echo errorMessage($ex->getMessage());
        $results = 0;
    }
    return $results;
}

function fetchMemberById($id){
    global $DB;
    $sql = "SELECT * FROM users WHERE 1 AND id = :id";

    try{
        $statement = $DB->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $result = $statement->fetchAll();
    }catch (Exception $ex){
        $_SESSION['error_msg'] = errorMessage($ex->getMessage());
        $result = 0;
    }
    return $result;
}
function fetchMemberByVoice($id){
    global $DB;
    $sql = "SELECT f_name, l_name FROM users WHERE voice = :id ORDER BY l_name ASC";

    try{
        $statement = $DB->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $result = $statement->fetchAll();
    }catch (Exception $ex){
        $_SESSION['error_msg'] = errorMessage($ex->getMessage());
        $result = 0;
    }
    return $result;
}

/** Execs Table */
function fetchExecs(){
    global $DB;
    $sql = "SELECT id, start, end, cm, sec, dir FROM execs ORDER BY start DESC";

    try{
        $statement = $DB->query($sql);
        $statement->execute();
        $results = $statement->fetchAll();
    }catch (Exception $ex){
        echo errorMessage($ex->getMessage());
        $results = 0;
    }
    return $results;
}

function fetchExecById($id){
    global $DB;
    $sql = "SELECT * FROM execs WHERE 1 AND id = :id";

    try{
        $statement = $DB->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $result = $statement->fetchAll();
    }catch (Exception $ex){
        $_SESSION['error_msg'] = errorMessage($ex->getMessage());
        $result = 0;
    }
    return $result;
}
function fetchCurrrentExec(){
    global $DB;
    $sql = "SELECT * FROM execs ORDER BY start DESC LIMIT 1";

    try{
        $statement = $DB->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
    }catch (Exception $ex){
        $_SESSION['error_msg'] = errorMessage($ex->getMessage());
        $result = 0;
    }
    return $result;
}


/** Readings Table */
function fetchReadings(){
    global $DB;
    $sql = "SELECT id, date, first, response, second, gospel FROM readings ORDER BY date DESC";

    try{
        $statement = $DB->query($sql);
        $statement->execute();
        $results = $statement->fetchAll();
    }catch (Exception $ex){
        echo errorMessage($ex->getMessage());
        $results = 0;
    }
    return $results;
}

function fetchReadingById($id){
    global $DB;
    $sql = "SELECT * FROM readings WHERE 1 AND id = :id";

    try{
        $statement = $DB->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $result = $statement->fetchAll();
    }catch (Exception $ex){
        $_SESSION['error_msg'] = errorMessage($ex->getMessage());
        $result = 0;
    }
    return $result;
}

function getDailyReading(string $date){
    global $DB;
    $sql = "SELECT id, date, first, second, gospel FROM readings WHERE date = :date";

    try{
        $statement = $DB->query($sql);
        $statement->bindValue(':date', $date);
        $statement->execute();
        $results = $statement->fetchAll();
    }catch (Exception $ex){
        $_SESSION['error_msg'] = errorMessage($ex->getMessage());
        $results = 0;
    }
    return $results;
}













