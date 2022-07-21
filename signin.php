
<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
  include("db/config.php");

  $username=$_POST["usernameid"];
  $password=$_POST["passwordid"];
  $userid=$_POST["userid"];

  $sql="SELECT * FROM `users` WHERE `username` = '$username' AND `userpassword` = '$password'";
  $res=mysqli_query($con,$sql);
  $num = mysqli_num_rows($res);
  if ($num == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $userid;
            header("location: index.php");
    // while($row=mysqli_fetch_assoc($res)){
    //     if (password_verify($password, $row['userpassword'])){ 
    //         $login = true;
    //         session_start();
    //         $_SESSION['loggedin'] = true;
    //         $_SESSION['username'] = $username;
    //         header("location: home.php");
    //     } 
    //     else{
    //       echo "<script>alert('invalid username or password');</script>";
    //     }
    }
    
else{
  echo "<script>alert('invalid login');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotesApp</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="public/style.css" rel="stylesheet">
    <link href="public/reg.css" rel="stylesheet">

</head>

<body>

<!--form-->
<div class="d-flex flex-row justify-content-evenly reg-con">
  <form class="regform border border-warning my-2 rounded-end shadow-lg p-3 mb-5  rounded" method="POST" action="signin.php">
    <div class="mb-3">
    <div class="mb-3">

    <div class="mb-3">
      <label for="usernameid" class="form-label fw-bold">User name</label>
      <input type="text" class="form-control" id="usernameid" aria-describedby="emailHelp" name="usernameid">
    </div>
    <div class="mb-3">
      <label for="userid" class="form-label fw-bold">user ID</label>
      <input type="text" class="form-control" id="userid" aria-describedby="emailHelp" name="userid">
    </div>
    <div class="mb-3">
      <label for="passwordid" class="form-label fw-bold">Password</label>
      <input type="password" class="form-control" id="passwordid" name="passwordid">
    </div>

    <div class="mx-auto" style="width:100px">
      <button type="submit" class="btn btn-primary">Log in</button>
    </div>  

    <div class=" mx-auto my-5" style="width:200px">
        <h6>New user? <a href="signup.php">click here</a></h6>
    </div>
  </form>
</div>


</body>


</html>
