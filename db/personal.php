<?php
session_start();
$_SESSION['teams'] = false;
$_SESSION['owner_idteam'] = "empty";
header("location: ../home.php");
?>