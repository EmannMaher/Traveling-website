<?php
session_start();//initiate global variable in server for session
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "Project";

$conn = mysqli_connect($servername, $username, $pass, $dbname);

if (!$conn) {
	echo "Connection failed!";
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}
     if (empty($email)) {
		header("Location: signin.php?error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: signin.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM Users WHERE Email='$email' AND Password='$password'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Email'] == $email && $row['Password'] == $password) {
				$id = "UserID";
            	$_SESSION[$id] = $row[$id];
            	header("Location: home.html");
		        exit();
            }else{
				header("Location: signin.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: signin.php?error=Incorect User name or password");
	        exit();
		}
	}
 ?>