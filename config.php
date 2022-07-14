
<?php 
    $insert=false;

    $server = "sql6.freesqldatabase.com";
    $username = "sql6506473";
    $password ="zy1TPuV8Pw";
    $db="sql6506473";
    $con=mysqli_connect($server, $username, $password, $db);

    if(!$con){
      echo "connection is failed because ".mysqli_connect_error();
    }

    if($_SERVER['REQUEST_METHOD']=='POST'){
      
      if(isset($_POST['snoid'])){
        //update existing note
        $sno=$_POST['snoid'];
        $title=$_POST['titletextid'];
        $des=$_POST['desctextid'];
  
        $sql=" UPDATE `notes` SET `title` = '$title', `description` = '$des' WHERE `sno`=$sno ";
        $res=mysqli_query($con,$sql);

        if($res){
          $insert="true";
          header("Location: index.php");
        }else{
          echo "Failed : ". mysqli_error($con);
        }

      }else{
        $title=$_POST['titletext'];
        $des=$_POST['desctext'];
  
        $sql=" INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$des')";
        $res=mysqli_query($con,$sql);
  
        if($res){
          $insert="true";
          header("Location: index.php");
        }else{
          echo "Failed : ". mysqli_error($con);
        }
      } 
    }


    if(isset($_GET['delete'])){
      $sno=$_GET['delete'];
      $sql="DELETE FROM `notes` WHERE `notes`.`sno` = $sno";
      $res=mysqli_query($con,$sql);
  
        if($res){
          $insert="true";
          header("Location: index.php");
        }else{
          echo "Failed : ". mysqli_error($con);
        }
    }
    
?>

<!-- INSERT INTO `notes` (`sno`, `title`, `description`, `timestam`) VALUES (NULL, 'first task', 'making project of dbms', current_timestamp()); -->