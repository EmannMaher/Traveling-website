<?php

    if(!isset($_SESSION)){
      session_start();
    }
    if (!isset($_SESSION['UserID'])){
      header("location: FirstPage.html");
    }
    if (isset($_SESSION['UserID']) && isset($_SESSION['Price']) && isset($_SESSION['TripID']) && isset($_SESSION['date'])){
      $price=$_SESSION['Price'];
      $userID=$_SESSION['UserID'];
      $tripID=$_SESSION['TripID'];
      $Date = strtotime($_SESSION['date']);
      $date=date("d-m-Y", $Date);
    }


 $servername = "localhost";
 $username = "root";
 $pass = "";
 $dbname = "Project";
 $dbtable = "Users";

 // Create connection
 $conn = new mysqli($servername,$username, $pass, $dbname);
  // Check connection
    
  if (!$conn) {
    die("Connection failed: ". $conn->connect_error);
 }

$sql = "INSERT INTO `Booked` (`Trip or Ticket`, `Price`, `UserID`, `Tour/Ticket_Number` ,`TripDate`)VALUES ('Ticket',$price,$userID,$tripID,'$date');";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } 
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>