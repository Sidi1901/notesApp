<?php
if(session_status()==PHP_SESSION_NONE){
  session_start();
}

//none->on ->none       dis->on
include("config.php");
 if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['snoid'])){
      //update existing note
      $sno=$_POST['snoid'];
      $title=$_POST['titletextid'];
      $des=$_POST['desctextid'];
      $username=$_SESSION['username'];
      $sql=" UPDATE `notes` SET `title` = '$title', `description` = '$des', `username` = '$username' WHERE `sno`=$sno ";
      $res=mysqli_query($con,$sql);

      if($res){
        $insert="true";
        header("Location: ../home.php");
      }else{
        echo "Failed : ". mysqli_error($con);
      }

    }else{

      //insertion
      $title=$_POST['titletext'];
      $des=$_POST['desctext'];
      $username=$_SESSION['username'];
      $userid=$_SESSION['userid'];

      if($title===""){

      }else{
        $sql=" INSERT INTO `notes` (`title`, `description`,`username`,`userid`) VALUES ('$title', '$des','$username','$userid')";
        $res=mysqli_query($con,$sql);

        if($res){
          $insert="true";
        }else{
          echo "Failed : ". mysqli_error($con);
        }
      }

      header("Location: ../home.php");
      
    } 
  }

  //deletion
  if(isset($_GET['delete'])){
    $sno=$_GET['delete'];
    $sql="DELETE FROM `notes` WHERE `notes`.`sno` = $sno";
    $res=mysqli_query($con,$sql);

      if($res){
        $insert="true";
        header("Location: ../home.php");
      }else{
        echo "Failed : ". mysqli_error($con);
      }
  }

?>