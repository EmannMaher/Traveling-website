<?php

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
      //  $sql = "INSERT INTO $dbtable VALUES (5,'salma', 'ashraf', '2001-10-1', '012222222', 'salma.ashradwan@gmail.com', 'salma') ; ";

    $fnamee = $_GET['fname'];
    $lnamee  = $_GET['lname'];
    $dobb  = $_GET['dob'];
    $phonee  = $_GET['phone'];
    $emaill  = $_GET['email'];
    $pass  = $_GET['password'];

     $sql = "INSERT INTO $dbtable (FName, LName, DOB, PhoneNo, Email, Password) VALUES ('$fnamee', '$lnamee', '$dobb', '$phonee', '$emaill', '$pass') ";
    
    if ($conn->query($sql) === TRUE) {
      header("Location: index.php?success=You have registered successfully !");
    } 
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();

?>