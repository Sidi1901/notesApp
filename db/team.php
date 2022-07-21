<?php

session_start();
$_SESSION['teams'] = true;
header("location: ../home.php");
?>