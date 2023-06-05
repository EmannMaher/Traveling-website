<?php
if(!isset($_SESSION)){
  session_start();
  $_SESSION['userID']=1;
  if (isset($_SESSION['userID']) && isset($_SESSION['Price']) && isset($_SESSION['TripID']) && isset($_SESSION['date'])){
    $price=$_SESSION['Price'];
    $userID=$_SESSION['userID'];
    $tripID=$_SESSION['TripID'];
    $Date = strtotime($_SESSION['date']);
    $date=date("d-m-Y", $Date);
  }
}
$databaseURL = "https://project-4e8fa-default-rtdb.firebaseio.com/";
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);
$insert = $db->insert("/BookedTrips", [
    "Trip or Ticket" => "Trip",
    "Price" => $price,
    "UserID" => $userID,
    "Trip_ID" => $tripID,
    "TripDate" => $date
 ]);

$conn = mysqli_connect("localhost","root","", "Project");
if (!$conn) {
	echo "Connection failed!";
}
$sql = "INSERT INTO `Booked` (`Trip or Ticket`, `Price`, `UserID`, `Trip_ID` ,`TripDate`)VALUES ('Trip',$price,$userID,$tripID,'$date');";
$result = mysqli_query($conn, $sql);
if ($result) {
   header("Location: Book Trip.php?success=You have booked successfully !");
exit();
}else {
    header("Location: Book Trip.php?error=Unknown error occurred");
 exit();
}
?>