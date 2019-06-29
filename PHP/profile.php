<?php
   // start session
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body><h1>Profile page</h1>
<?php

    if($_SESSION['loggedIn']===true)
    {
        echo "welcome user<br>";
        
                   echo $_SESSION['userDetail']['id']."<br>";
                   echo $_SESSION['userDetail']['first_name']."<br>";
                   echo $_SESSION['userDetail']['last_name']."<br>";
                   echo $_SESSION['userDetail']['email']."<br><br>";
    }
    else {
        header('Location: Day14.php');
    }
      
 ?>

 <a href="logout.php">Logout</a>
    
</body>
</html>