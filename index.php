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

    <link href="style.css" rel="stylesheet">

</head>
<body>
    

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

        <div class="input-container">
            <form class="formclass" method="POST" action="/NotesApp/config.php">
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

      <div class="notes-container">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>

            <tbody>
                <?php 
                  $sql="SELECT * FROM `notes`";
                  $res=mysqli_query($con, $sql);

                  while($rownum=mysqli_fetch_assoc($res)){  
                    echo "<tr>
                      <th scope='row'>".$rownum['sno']."</th>
                      <td>".$rownum['title']."</td>
                      <td>".$rownum['description']."</td>
                    </tr>";
                  } 
                ?>
            </tbody>
        </table>
        
      </div>

 </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>