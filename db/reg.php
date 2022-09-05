<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
  include("config.php");
   
  $user_id=$_POST["userid"];
  $password=$_POST["passwordid"];
  $password2=$_POST["password2id"];

  $exituser="SELECT * FROM `users` WHERE `user_id` = '$user_id'";
  $res=mysqli_query($con,$exituser);
  $numrow=mysqli_num_rows($res);
  
  if($numrow==0){

        if($password == $password2){
            if($password != ""){
              $sql="INSERT INTO `users` ( `user_id`, `password`) VALUES ('$user_id','$password')";
              $res=mysqli_query($con,$sql);
              
              if($res){
                // allot owner_id
                $owner_id=MD5(RAND()); // message digest function similar to SHA hashing function
                //echo $owner_id;
                $teammodevalue=0;
                $team_namevalue=NULL;
                $sql2="INSERT INTO `owners` ( `owner_id`, `user_idf`, `teammode`, `team_name`) VALUES ('$owner_id','$user_id', '$teammodevalue', '$team_namevalue')";
                $res2=mysqli_query($con,$sql2);
                if($res){
                  header("Location: home.php");  
                }else{
                  //throw error
                  echo "Failed : ". mysqli_error($con);
                }
            }else{
              echo "<script>alert('password can not empty');</script>";
            }
        }else{
          echo "<script>alert('password do not match');</script>";
        } 
      }
  }else{
      echo "<script>alert('user exists');</script>";
  }

 $numrow=0;
 $numrowid=0;
}

?>