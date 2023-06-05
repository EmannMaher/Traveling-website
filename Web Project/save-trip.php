<?php
include "includes/connect.php";
if (!isset($_SESSION['UserID'])){
    header("location: FirstPage.html");
}
$errors = false;

if (isset($_POST['trip'])) {

    if (!empty($_POST['Source'])) {
        $_Source = $_POST['Source'];
    } else {
        $errors[] = 'Source not exist';
    }

    if (!empty($_POST['trans'])) {
        $_trans = $_POST['trans'];
    } else {
        $errors[] = 'Transportation not exist';
    }

    if (!empty($_POST['Adults'])) {
        $_Adults = $_POST['Adults'];
    } else {
        $errors[] = 'Adults not exist';
    }

    if (!empty($_POST['Childrenn'])) {
        $_Childrenn = $_POST['Childrenn'];
    } else {
        $errors[] = 'Childrenn not exist';
    }
    if (!empty($_POST['Dest'])) {
        $_Dest = $_POST['Dest'];
    } else {
        $errors[] = 'Destination not exist';
    }
    if (!empty($_POST['firstdate'])) {
        $_firstdate = $_POST['firstdate'];
    } else {
        $errors[] = 'First date not exist';
    }

    if (!empty($_POST['lastdate'])) {
        $_lastdate = $_POST['lastdate'];
    } else {
        $errors[] = 'Last date not exist';
    }

//TOdo: if else all adults ,children , trans, dest,source,first date last date

    if (!$errors) {//connect to database incase no previous errors
        //
        $_grp_member = intval($_Childrenn) + intval($_Adults);

        try {
            // insert in to  DB
            $query = "INSERT INTO `vip_trips` (`Source`,`Destination`,`StartDate`,`DueDate`,`Group_members`) VALUES ('$_Source', '$_Dest','$_firstdate','$_lastdate','$_grp_member')";

            if (!$mysqli->query($query)) {
                $errors[] = 'something went wrong';
            }
        } catch (\Exception $e) {//databse disconection
             $errors[] = 'something went wrong '.$e->getMessage();
        }
    }
}
