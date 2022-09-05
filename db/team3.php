<?php
//add member in members or set session owner team id
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $ownerid=$_POST['addteam'];
    $mem_id=$_POST['mem_id'];
    $team_name=$_POST['team_name'];
    if($mem_id===""){
            
    }else{
      $sql=" INSERT INTO `members` (`user_idf`, `owner_idf`, `team_name`, `teammode`) VALUES ('$mem_id', '$ownerid', '$team_name', 0)";
      $res=mysqli_query($con,$sql);

      if($res){
        $insert="true";
      }else{
        echo "Failed : ". mysqli_error($con);
      }
    }
}

session_start();
$_SESSION['owner_idteam']=$ownerid;
header("location: ../jointeam.php");
?>