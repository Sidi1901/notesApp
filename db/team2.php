<?php
//add member in members or set session owner team id
if($_SERVER['REQUEST_METHOD']=='POST'){
    $ownerid=$_POST['jointeam'];
}

session_start();
$_SESSION['owner_idteam']=$ownerid;
header("location: ../home.php");
?>