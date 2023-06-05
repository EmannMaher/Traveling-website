<?php
include "includes/connect.php";
if ($_SESSION['UserID']) {
    session_destroy();
}
session_destroy();
header("location: FirstPage.html");
exit();