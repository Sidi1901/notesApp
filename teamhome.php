<?php 
  include("db/crud.php");
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
    <link href="public/main.css" rel="stylesheet">
</head>
<body>



<?php include("partials/nav.php")?>

    
<div class=" d-flex flex-row justify-content-evenly main-con">


 <!-- input form -->
        <div class="input-container">
            <form class="formclass" method="POST" action="db/crud.php">
              <div class="mb-3 my-4">
                <label for="titletext" class="form-label" style="font-weight:bold">Title</label>
                <input type="text" class="form-control" id="titletext" name="titletext"aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="desctext" class="form-label" style="font-weight:bold">Description</label>
                <textarea type="text" class="form-control" id="desctext" name="desctext"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">ADD notes</button>
            </form>
        </div>







 <!-- display table -->
      <div class="notes-container">

    <table class="table hover" id="myTable" >
          <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">edit</th>
              </tr>
          </thead>

          <tbody>
              <?php 
                $sql="SELECT * FROM `notes`";
                $res=mysqli_query($con, $sql);
                $sno=0;


                while($rownum=mysqli_fetch_assoc($res)){  
                  $sno=$sno+1;
                  echo "<tr>
                  <th scope='row'>".$sno."</th>
                  <td>".$rownum['title']."</td>
                  <td>".$rownum['description']."</td>
                  <td><button class='edit' id=".$rownum['sno'].">Edit</button> <button class='delete' id=d".$rownum['sno'].">Delete</button></td>
                </tr>";
              }  
            ?>
        </tbody>
    </table>
        
  </div>


      
 <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit note</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body ">
        <form class="formclass" method="POST" action="db/crud.php">  
                <div class="mb-3 my-4">
                  <input type="hidden" id="snoid" name="snoid">
                </div>
                <div class="mb-3 my-4">
                  <label for="titletextid" class="form-label">title</label>
                  <input type="text" class="form-control" id="titletextid" name="titletextid"aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="desctextid" class="form-label">description</label>
                  <textarea type="text" class="form-control" id="desctextid" name="desctextid"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">update</button>
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



  <script>

      $(document).ready(function () {
        $('#myTable').DataTable({
        scrollY: '350px',
        scrollCollapse: true,
        paging: false,
        });
      });

    edit=document.getElementsByClassName('edit');
    Array.from(edit).forEach((element)=>{
      element.addEventListener("click",(e)=>{
      console.log("done");
      tr=e.target.parentNode.parentNode;
      title=tr.getElementsByTagName('td')[0].innerText;
      desc=tr.getElementsByTagName('td')[1].innerText;
      titletextid.value=title;
      desctextid.value=desc;
      snoid.value=e.target.id;
      $('#exampleModal').modal('toggle');
      })
    })


    deletee=document.getElementsByClassName('delete');
      Array.from(deletee).forEach((element)=>{
      element.addEventListener("click",(e)=>{
      sno=e.target.id.substr(1,);
      if(confirm("confirm deletion!")){
        console.log("yes");
        window.location=`db/crud.php?delete=${sno}`;
      }else{
        console.log("no");
      }
      })
    })
    </script>
</html>