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
    <link href="public/teamstyle.css" rel="stylesheet">
</head>

<body>

    <?php include("partials/nav.php")?>

    <div class="home-con d-flex flex-column justify-content-center">
        <div class="align-self-center">
            <img style="height: 300px; width: 300px" src="assets/vect.webp"></img>
        </div>
        <div class=" btn-con d-flex align-self-center my-5">
            <button type="button" class="create btn button-63 btn-outline-primary btn-lg mx-5 flex-fill" role="button">Create team</button>
            <button type="button" class="join btn button-63 btn-outline-primary btn-lg mx-5 flex-fill" role="button">Join team</button>
        </div>
    </div>

  <!-- Modal for team creation  insertion in owners table -->
  <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createLabel"    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createLabel">Team details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body ">
        <div class="input-container">
            <form class="formclass" method="POST" action="db/crud.php">
              <div class="mb-3 my-4">
                <label for="teamName" class="form-label" style="font-weight:bold">Team Name</label>
                <input type="text" class="form-control" id="teamName" name="teamName"aria-describedby="emailHelp">
              </div>
              <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
        </div>
      </div>
    </div>
  </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


<script src="public/index.js"></script>

<script>

    create=document.getElementsByClassName('create');
    Array.from(create).forEach((element)=>{
        element.addEventListener("click",(e)=>{
            $('#createModal').modal('toggle');
      })
    })

    join=document.getElementsByClassName('join');
    Array.from(join).forEach((element)=>{
        element.addEventListener("click",(e)=>{
            window.location=`jointeam.php`;
      })
    })

</script>

</html>
