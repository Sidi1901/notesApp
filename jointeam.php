<?php 
  include("db/crud.php");
  if(session_status()==PHP_SESSION_NONE){
    session_start();
  }  
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: signin.php");
    }

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="public/style.css" rel="stylesheet">

    <style>
      body {background-color: rgba(108, 167, 190, 0.7);}
    </style>
</head>
<body>


<!-- display teams -->
<div class="notes-container">

<table class="table hover" id="myTable" >
      <thead>
          <tr>
            <th scope="col">sno.</th>
            <th scope="col">Team name</th>
            <th scope="col">join team</th>
            <th scope="col">Action</th>
          </tr>
      </thead>

      <tbody>
          <?php 

            $user_id=$_SESSION['user_id'];
            $sql="SELECT user_idf, owner_id, team_name, teammode FROM `owners` WHERE `user_idf` = '$user_id' AND teammode=1 UNION SELECT user_idf, owner_idf AS owner_id, team_name, teammode FROM `members` WHERE `user_idf` = '$user_id'";
            $res=mysqli_query($con, $sql);
            $sno=0;

 
            while($rownum=mysqli_fetch_assoc($res)){  
              $sno=$sno+1;
              echo "<tr>
              <th scope='row'>".$sno."</th>
              <td>".$rownum['team_name']."</td>
              <td>".$rownum['owner_id']."</td>
              <td><button class='join border-primary rounded' id=".$rownum['owner_id'].">Join</button></td>";

              if($rownum['teammode']==1){
                echo" 
                <td><button class='addmem border-primary rounded' id=".$rownum['owner_id'].">Add member</button></td>";            
              }
              echo"
              </tr>";
          }  
        ?>
    </tbody>
</table>
    
</div>

<div class="modal fade" id="joinModal" tabindex="-1" aria-labelledby="joinLabel"    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="joinLabel">JOIN</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body ">
        <form class="formclass" method="POST" action="db/team2.php">  
                <div class="mb-3 my-4">
                  <label for="jointeam" class="form-label">team</label>
                  <input type="text" class="form-control" id="jointeam" name="jointeam"aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">JOIN</button>
        </form>
        </div>
      </div>
    </div>
  </div>

  
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addLabel"    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addLabel">JOIN</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body ">
        <form class="formclass" method="POST" action="db/team3.php">  
                <div class="mb-3 my-4">
                  <label for="team_name" class="form-label">team</label>
                  <input type="text" class="form-control" id="team_name" name="team_name"aria-describedby="emailHelp">
                </div>
                <div class="mb-3 my-4">
                  <label for="addteam" class="form-label">team ID</label>
                  <input type="text" class="form-control" id="addteam" name="addteam"aria-describedby="emailHelp">
                </div>
                <div class="mb-3 my-4">
                  <label for="mem_id" class="form-label">ADD member User ID</label>
                  <input type="text" class="form-control" id="mem_id" name="mem_id"aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">JOIN</button>
        </form>
        </div>
      </div>
    </div>
  </div>
    
</body>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script>

$(document).ready(function () {
  $('#myTable').DataTable({
  scrollY: '300px',
  scrollCollapse: true,
  paging: false,
  });
});

addmem=document.getElementsByClassName('addmem');
Array.from(addmem).forEach((element)=>{
  element.addEventListener("click",(e)=>{
  tr=e.target.parentNode.parentNode;  // btn -> td -> tr
  teamname=tr.getElementsByTagName('td')[0].innerText;
  ownerid=tr.getElementsByTagName('td')[1].innerText;
  team_name.value=teamname;
  addteam.value=ownerid;
  $('#addModal').modal('toggle');
  })
})

join=document.getElementsByClassName('join');
Array.from(join).forEach((element)=>{
    element.addEventListener("click",(e)=>{
    tr=e.target.parentNode.parentNode;
    ownerid=tr.getElementsByTagName('td')[1].innerText;
    jointeam.value=ownerid;
    $('#joinModal').modal('toggle');
  })
})
</script>
</html>