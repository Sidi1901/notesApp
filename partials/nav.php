 <!--navbar-->
<?php
  if(session_status()==PHP_SESSION_NONE){
      session_start();
  }
 
?>
 <nav class="navbar navbar-expand-lg bg-dark navbar-dark" style="height: 60px">
    <a class="navbar-brand" > <img src="assets/logo.png"  style="height: 36px; width:36px"></a>

    <div class="container-fluid">
      <a class="navbar-brand">Task Manager</a>
      <?php
      if (isset($_SESSION['loggedin'])) {
          echo "<h3 class='text-white fw-bold'>welcome ".$_SESSION['user_id']."</h3>";
      }else{
            echo"<h3 class='text-white fw-bold'>welcome</h3>";
      }
      ?>

       <!-- <?php echo $_SESSION['user_id'] ; ?></h3> -->
      <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link fw-bold" aria-current="page" href="index.php">Home</a>
            </li>v
            <li class="nav-item">
              <a class="nav-link fw-bold" aria-current="page" href="home.php">Dashboard</a>
            </li>

            <?php
              if ($_SESSION['owner_idteam']!="empty"){
                echo"<li class='nav-item'>
                <a class='nav-link fw-bold' href='db/exitteam.php'>Exit Team</a>
                </li>";
              }

              if (isset($_SESSION['loggedin'])) {
                echo"<li class='nav-item'>
                <a class='nav-link fw-bold' href='db/logout.php'>logout</a>
                </li>";
              }else{
                echo"<li class='nav-item'>
                <a class='nav-link fw-bold' href='db/logout.php'>login</a>
                </li>";
              }
            ?>

      </ul>

  </div>
</nav>
