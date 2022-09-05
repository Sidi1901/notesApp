<?php
     if(session_status()==PHP_SESSION_NONE){
        session_start();
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
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="public/style.css" rel="stylesheet">
    <link href="public/index.css" rel="stylesheet">
</head>

<body>

    <?php include("partials/nav.php")?>

    <div class="home-con d-flex flex-column justify-content-center">
        <div class="test-con align-self-center my-5">
            <h1><a style="color:white; text-decoration:none;" href="" class="typewrite" data-period="2000" data-type='[ "Are you tired of forgetting tasks?", "Start now", "Task manager"]'><span class="wrap"></span></a></h1>
        </div>
        <div class=" btn-con d-flex align-self-center my-5">
            <button type="button" class="personal btn button-63 btn-outline-primary btn-lg mx-3 flex-fill" role="button">Personal</button>
            <button type="button" class="team btn button-63 btn-outline-primary btn-lg mx-3 flex-fill" role="button" >Team</button>
        </div>

        <div class=" align-self-center my-5">
            <h5 style="color:white;">New user? <a href="./signup.php">Join now</a></h5>
        </div>
    </div>

</body>
<script src="public/index.js"></script>

<script>

personal=document.getElementsByClassName('personal');
    Array.from(personal).forEach((element)=>{
        element.addEventListener("click",(e)=>{
            window.location=`db/personal.php`;
      })
    })
    
teams=document.getElementsByClassName('team');
    Array.from(teams).forEach((element)=>{
        element.addEventListener("click",(e)=>{
            window.location=`db/team.php`;
      })
    })
    
    


</script>

</html>