<?php
session_start();//initiate global variable in server for session
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "Project";

/*$mysqli = new mysqli($servername,$username,$pass,$dbname);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}*/
$conn = mysqli_connect($servername, $username, $pass, $dbname);

if (!$conn) {
	echo "Connection failed!";
}
