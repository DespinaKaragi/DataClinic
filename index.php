<?php
session_start();
require_once("Classes/Database.php");
require_once("Classes/Users.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Doctor Application</title>
</head>

<body>

    <?php
    if (isset($_GET['action'])) {
        $a = $_GET['action'];
    } else {
        $a = -1;
    }
    if (isset($_SESSION['username'])) { //Αν ο χρήστης είναι logged in
        if (($_SESSION['rolosXrhsth']) == 4) { //αν ειναι admin
            include("Front_Modules/Navbars/AdminNavbar.php");
        }
        if (($_SESSION['rolosXrhsth']) == 1) { //αν ειναι simple user
            include("Front_Modules/Navbars/SimpleNavbar.php");
        }
        if (($_SESSION['rolosXrhsth']) == 2) { //αν ειναι doctor
            include("Front_Modules/Navbars/DoctorNavbar.php");
        }
        if (($_SESSION['rolosXrhsth']) == 3) { //αν ειναι Secretary
            include("Front_Modules/Navbars/SecretaryNavbar.php");
        }
    } else {
        include("Front_Modules/Login.php");
    }
    include("Front_Modules/MainContent.php");
    ?>




</body>

</html>