
<?php 

    $server = "sql6.freesqldatabase.com";
    $username = "sql6506473";
    $password ="zy1TPuV8Pw";
    $db="sql6506473";

    // $server = "localhost";
    // $username = "root";
    // $password ="";
    // $db="notes";
    $con=mysqli_connect($server, $username, $password, $db);

    if(!$con){
      echo "connection is failed because ".mysqli_connect_error();
    }
    
?>

<!-- INSERT INTO `notes` (`sno`, `title`, `description`, `timestam`) VALUES (NULL, 'first task', 'making project of dbms', current_timestamp()); -->