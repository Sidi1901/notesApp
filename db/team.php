<?php
session_start();
$_SESSION['teams'] = true;
header("location: ../newteam.php");
?>