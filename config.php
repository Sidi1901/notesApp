<!--connection to db-->

<?php 
    $insert=false;

    $server = "localhost";
    $username = "root";
    $password ="";
    $db="notes";
    $con=mysqli_connect($server, $username, $password, $db);

    if(!$con){
      echo "connection is failed because ".mysqli_connect_error();
    }

    if($_SERVER['REQUEST_METHOD']=='POST'){

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
    
?>

<!-- INSERT INTO `notes` (`sno`, `title`, `description`, `timestam`) VALUES (NULL, 'first task', 'making project of dbms', current_timestamp()); -->