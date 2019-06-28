<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day13</title>
</head>
<body>


    <!-- validation and fill value -->
 <?php

 $fnameErr = $lnameErr = $emailErr =$passErr="";
 $fname = $lname= $email = $pass="";
 $status=true;
     if(!empty($_POST))
     {
         if(empty($_POST['fname']))
         {
             $fnameErr = "First Name must be filled";
             $status=false;
         }
         else {
             $fname = $_POST['fname'];
         }

         if(empty($_POST['lname']))
         {
             $lnameErr = "Last Name must be filled";
             $status=false;
         }
         else {
             $lname = $_POST['lname'];
         }

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
         $sql="INSERT INTO users (first_name, last_name, email, password)
               values('$fname','$lname','$email','$pass')";
               if($conn->query($sql))
               {
                   echo "Record Inser";
               }
               else {
                   echo "ERROR" . $sql . "<br>" .$conn->error;
               }
     }

     }
     
 ?>


    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
        First Name:<input type="text" name="fname" value=<?php echo $fname; ?>> <br>
        <p><?php echo $fnameErr; ?></p>

        Last Name:<input type="text" name="lname" value="<?php echo $lname; ?>"><br>
        <p><?php echo $lnameErr; ?></p>

        Email:<input type="email" name="email" value=<?php echo $email; ?>><br>
        <p><?php echo $emailErr; ?></p>

        Password:<input type="password" name="pass" value=<?php echo $pass; ?>><br>
        <p><?php echo $passErr; ?></p>


        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>