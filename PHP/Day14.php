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
    <title>Day14</title>
</head>
<body>
     

     
    <!-- validation and fill value -->
 <?php

 $emailErr =$passErr="";
 $email = $pass="";
 $status=true;
     if(!empty($_POST))
     {
        
         if(empty($_POST['email']))
         {
             $emailErr = "Email must be filled";
             $status=false;
         }
         else {
             $email = $_POST['email'];
         }

         if(empty($_POST['pass']))
         {
             $passErr = "Password must be filled";
             $status=false;
         }
         else {
             $pass = $_POST['pass'];
         }


     //Connect To Database
     $servername="localhost";
     $username="root";
     $password="";
     $db="blog_test";

     if($status)
     {
         $conn = new mysqli($servername, $username, $password, $db);

         //Check Error
         if($conn->connect_error)
         {
             die("Connection Failed: ". $conn->connect_error);
         }
         
         // Insert Into Database
         $sql="SELECT id,first_name,last_name,email FROM users WHERE email='$email' AND password='$pass'";
         $result = $conn->query($sql);
               if($result->num_rows > 0)
               {
                   $record = $result->fetch_assoc();
                   $_SESSION['loggedIn'] = true;
                   $_SESSION['userDetail'] = $record;
                   header('Location:profile.php');
               }
               else {
                   echo "Invalid Username and Password";
               }
               $conn -> close();
     }

     }
     
 ?>


    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">

        Email:<input type="email" name="email" value=<?php echo $email; ?>><br>
        <p><?php echo $emailErr; ?></p>

        Password:<input type="password" name="pass" value=<?php echo $pass; ?>><br>
        <p><?php echo $passErr; ?></p>


        <input type="submit" name="submit" value="submit">
    </form>
    
</body>
</html>