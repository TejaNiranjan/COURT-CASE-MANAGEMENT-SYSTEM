<?php

$host = 'localhost';
$user = 'root';
$pwd = 'Root@123';
$db = 'court_case_management';

$con = new mysqli($host, $user, $pwd, $db);

if ($con->connect_errno) {
    die("Connection failed: " . $con->connect_error);
}

?>