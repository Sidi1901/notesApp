<?php 
  include("config.php");
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
    <link href="style.css" rel="stylesheet">

</head>
<body>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit note</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">

      <form class="formclass" method="POST" action="/NotesApp/config.php">
        
              
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
              <button type="submit" class="btn btn-primary">ADD notes</button>
      </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>





<!--navbar-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>




      <div class="container d-flex flex-row justify-content-evenly">


<!-- input form -->
        <div class="input-container">
            <form class="formclass" method="POST" action="/NotesApp/config.php?update=true">
              <div class="mb-3 my-4">
                <label for="titletext" class="form-label">title</label>
                <input type="text" class="form-control" id="titletext" name="titletext"aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="desctext" class="form-label">description</label>
                <textarea type="text" class="form-control" id="desctext" name="desctext"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">ADD notes</button>
            </form>
        </div>



        
        <?php
        if($insert){
          echo "<script>alert('Hello! I am an alert box!!')</script>";  
        }
        ?>




<!-- display table -->
      <div class="notes-container">

        <table class="table hover" id="myTable">
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
                      <td><button class='edit' id=".$rownum['sno'].">Edit</button><button>Delete</button></td>
                    </tr>";
                  }  
                ?>
            </tbody>
        </table>
        
      </div>

 </div>

 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>

      $(document).ready(function () {
      $('#myTable').DataTable({
        scrollY: '460px',
        scrollCollapse: true,
        paging: false,
      });
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script>
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
          console.log(title +" "+ desc+" "+snoid.value);
          $('#exampleModal').modal('toggle');
        })
      })
    </script>

</body>
</html>