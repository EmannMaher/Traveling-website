<?php
include "includes/connect.php";
//check if login
$userID = $_SESSION['UserID']; //access of session variable
if (!$userID) {//if not logged in
    header("location:FirstPage.html");//default document(index.php)
    exit();
}
$error = false;
$query = "SELECT b.*, t.*, tt.* FROM `booked` b INNER JOIN users u ON u.UserID = b.UserID INNER JOIN trips t ON t.Trip_ID = b.Trip_ID INNER JOIN `tours and tickets` tt ON tt.Tour_Ticket_Number = b.Tour_Ticket_Number
where b.UserID = $userID";
$bookedResults = $mysqli->query($query)->fetch_all();

if (!$bookedResults) {
    $error = "No booked trips";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booked </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="booked.CSS">
    <style>
        body {
            background-color: rgba(0, 0, 0, .1);
        }
        h1 {
            text-decoration-line: underline;
            text-decoration-style: solid;
        }
    </style>
</head>
<body>
<header>
<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container-fluid ">
        <nav class="navbar bg-light">
            <div class="container ">
                <img src="https://www.tripsinegypt.com/wp-content/uploads/2020/04/Trips-in-Egypt-Logo-1.png"
                     alt="Trips" width="50" height="40">
            </div>
        </nav>

        <div class="collapse navbar-collapse mx-auto" style="width: 700px;" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0  ">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="About Us.html">About us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Trips.php">Trips</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="toursTickets.html">Tours & Tickets</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="SpecialGroup.php">Special Group</a>
                </li>

                <li class="nav-item">
                    <?php
                    if ($user) {
                        echo ' <a class="nav-link" href="logout.php">logout</a>';
                    } else {
                        echo ' <a class="nav-link" href="signin.php">Sign in</a>';
                    }
                    ?>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="profile.php" style="font-weight: bold;"><?php echo  $user['FName'] ;?> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booked.php" style="font-weight: bold;color: #1d439c"> Booked</a>
                </li>
            </ul>
        </div>
</nav>
</header>
<br>
<div class="content" style="margin-top: 50px"></div>
<div class="wrap" data-pos="0"  >
    <div class="headbar">
        <i class="zmdi zmdi-arrow-left btnBack"></i>
        <span>BOOKED TRIPS</span>
    </div>
    <?php if(!$bookedResults){ ?>
        <h4 style="color: white;text-align: center">
        No history of Booked Trips
        </h4>
    <?php }
    foreach ($bookedResults as $bookedData  ) {
        ?>
        <div class="header">
            <div class="bg"></div>
            <div class="filter"></div>
            <div class="title">
                <div class="fromPlace"><?= $bookedData['Source'] ?></div>
                <span class="separator"><i class="zmdi zmdi-airplane"></i></span>
                <div class="toPlace"><?= $bookedData['Destination'] ?></div>
            </div>
            <div class="map"></div>
        </div>
        <div class="content">
            <section>
                <div class="form">
                    <meta name="viewport" content="width=device-width,intial-scale=1.0">

                    <div class="control select">
                        <div class="control-head">
                            <i class="zmdi zmdi-flight-takeoff"></i>
                            <span class="close"><i class="zmdi zmdi-close"></i></span>
                            <div>
                                <h6>From</h6>
                                <span class="airport-name" data-role="from"><?= $bookedData['City'] ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="control select">
                        <div class="control-head">
                            <i class="zmdi zmdi-flight-land"></i>
                            <span class="close"><i class="zmdi zmdi-close"></i></span>
                            <div>
                                <h6>To</h6>
                                <span class="airport-name" data-role="to"><?= $bookedData['Destination'] ?></span>
                            </div>
                        </div>
                    </div>


                    <div class="control dateinput">
                        <div class="control-head">
                            <i class="zmdi zmdi-calendar"></i>
                            <span class="close"><i class="zmdi zmdi-close"></i></span>
                            <div class="control-item">
                                <h6>Depar</h6>
                                <span><?= $bookedData['Start_Date'] ?></span>
                            </div>
                            <div class="control-item">
                                <h6>Return</h6>
                                <span><?= $bookedData['Due_Date'] ?></span>
                            </div>
                        </div>

                    </div>


                    <div class="control dateinput">
                        <div class="control-head">
                            <i class="zmdi zmdi-calendar"></i>
                            <span class="close"><i class="zmdi zmdi-close"></i></span>
                            <div class="control-item">
                                <h6>Tickets</h6>
                                <span><?= $bookedData['no_tickets'] ?> Adult(s)</span>
                            </div>
                        </div>
                    </div>


                    <div class="control dateinput">
                        <div class="control-head">
                            <i class="zmdi zmdi-calendar"></i>
                            <span class="close"><i class="zmdi zmdi-close"></i></span>
                            <div class="control-item">
                                <h6>Class</h6>
                                <span><?= $bookedData['Ticket_type'] ?>  </span>
                            </div>
                        </div>

                        <div class="control">
                            <button onclick="location.href='index.php';" id="myButton">Home</button>
                            <script type="text/javascript">
                                document.getElementById("myButton").onclick = function () {
                                    location.href = "index.php";
                                };
                            </script>
                        </div>

                    </div>

            </section>
        </div> <br>
        <hr>
        <?php
    }
    $mysqli->close();
    ?>
</div>
</body>
</html>