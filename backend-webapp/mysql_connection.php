<?php
$servername = "localhost";
$username = "xxxxxx";
$password = "xxxxx";
$dbname = "xxxxx";
$time = time();
$time = substr($time, 0, 8);
//echo $time;

//echo 'Benson & Hedges takes you to the darkest corner of the world '.$time;
$new_uuid = hash('sha256', 'Kickback is going to be the best event solution in the world');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
