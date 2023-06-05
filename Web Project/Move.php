<?php
$databaseURL = "https://project-4e8fa-default-rtdb.firebaseio.com/";
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);
 $conn = mysqli_connect("localhost", "root", "", "Project");
 if (!$conn) {
   echo "Connection failed!";
 }
 for ($i=1;$i<=36;$i++){
    $sql = "SELECT * FROM Trips WHERE `Trip_ID`= '$i';";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_assoc($result);
      $insert = $db->insert("Trips", [
        "TripID" => $i,
        "Image" => $row['Image'],
        "Destination" => $row['Destination'],
        "Price" => $row['Price']
     ]);
 }
 echo ("Done"."\n");
}

?>