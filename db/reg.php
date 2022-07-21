<?php

$exists=false;
if($_SERVER['REQUEST_METHOD']=='POST'){
  include("config.php");
   
  $username=$_POST["usernameid"];
  $userid=$_POST["userid"];
  $email=$_POST["emailid"];
  $password=$_POST["passwordid"];
  $password2=$_POST["password2id"];

  $exituser="SELECT * FROM `users` WHERE `username` = '$username'";
  $res=mysqli_query($con,$exituser);
  $numrow=mysqli_num_rows($res);
  
  if($numrow==0){

        if($password == $password2 ){
          $sql="INSERT INTO `users` ( `username`, `useremail`, `userpassword`,`userID`) VALUES ('$username', '$email', '$password','$userid')";
          $resss=mysqli_query($con,$sql);
          
          if($resss){
            header("Location: home.php");  //?
          }else{
            //throw error
            echo "Failed : ". mysqli_error($con);
          }
        }else{
          echo "<script>alert('password do not match');</script>";
        } 
  }else{
      echo "<script>alert('user exists');</script>";
  }

 $numrow=0;
 $numrowid=0;
}

?>