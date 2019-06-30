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
    <title>Day14/profile</title>
</head>
<body>
     
   <!-- validation and fill value -->
 <?php

 $titleErr =$desErr="";
 $title = $des="";
 $status=true;
 $id= $_SESSION['userDetail']['id'];
     if(!empty($_POST))
     {
        
         if(empty($_POST['title']))
         {
             $titleErr = "Title must be filled";
             $status=false;
         }
         else {
             $title = $_POST['title'];
         }

         if(empty($_POST['des']))
         {
             $desErr = "Description must be filled";
             $status=false;
         }
         else {
             $des = $_POST['des'];
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
         $sql="INSERT INTO post (title, description, user_id)
               values('$title','$des', '$id')";
         $result = $conn->query($sql);
               // Close Connection
               $conn -> close();
     }

     }
     
 ?>


    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">

        Title:<input type="text" name="title"><br><br>
        <p><?php echo $titleErr; ?></p>

        Description:<textarea name="des" id="" cols="30" rows="10"></textarea><br><br>
        <p><?php echo $desErr; ?></p>


        <input type="submit" name="submit" value="submit">
    </form>
    
</body>
</html>