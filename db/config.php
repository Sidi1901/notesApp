
<?php 
    
    $server = "remotemysql.com:3306";
    $username = "6apeC8PM1u";
    $password ="VVrmRvr1XR";
    $db="6apeC8PM1u";

    // $server = "localhost";
    // $username = "root";
    // $password ="";
    // $db="notesdb";
    $con=mysqli_connect($server, $username, $password, $db);

    if(!$con){
      echo "connection is failed because ".mysqli_connect_error();
    }
    
?>

<!-- INSERT INTO `notes` (`sno`, `title`, `description`, `timestam`) VALUES (NULL, 'first task', 'making project of dbms', current_timestamp()); -->