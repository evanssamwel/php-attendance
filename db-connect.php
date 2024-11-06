<?php 
// Hostname
$host = "localhost";
// Username
$uname = "super_admin";
// Password
$pw = "StrongPassword123!";
// Database Name
$dbname = "simple_attendance_db";

try{
    $conn = new MySQLi($host, $uname, $pw, $dbname);
}catch(Exception $e){
    echo "Database Connection Failed: <br>";
    print_r($e->getMessage());
    exit;
}
