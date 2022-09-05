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
      $owner_id=$_SESSION['owner_id'];

      $sql=" UPDATE `notes` SET `topic` = '$title', `description` = '$des', `owner_idf` = '$owner_id' WHERE `sno`=$sno ";
      $res=mysqli_query($con,$sql);

      if($res){
        $insert="true";
        header("Location: ../home.php");
      }else{
        echo "Failed : ". mysqli_error($con);
      }

    }else{

      //insertion

      //if team is true
      if($_SESSION['teams']==true && $_SESSION['owner_idteam']=="empty"){
            // initial owner id in owners team where teammonde=1
              $teamName=$_POST['teamName'];
              $user_id=$_SESSION['user_id'];
              if($teamName==""){
      
              }else{
                $owner_id=MD5(RAND());
                $sql=" INSERT INTO `owners` (`owner_id`, `user_idf`,`teammode`, `team_name` ) VALUES ('$owner_id', '$user_id', 1 , '$teamName')";
                $res=mysqli_query($con,$sql);
                if($res){
                  $insert="true";
                }else{
                  echo "Failed : ". mysqli_error($con);
                }
              }              
          header("Location: ../home.php");
        }else{ 


      //notes taking is on
      $title=$_POST['titletext'];
      $des=$_POST['desctext'];
      $user_id=$_SESSION['user_id'];
      if($_SESSION['owner_idteam']=="empty"){
        $owner_id=$_SESSION['owner_id'];   // personal mode
      }else{
        $owner_id=$_SESSION['owner_idteam']; //teammode
      }

      if($title===""){

      }else{
        $sql=" INSERT INTO `notes` (`user_idf`, `owner_idf`, `topic`, `description`) VALUES ('$user_id', '$owner_id', '$title', '$des')";
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