<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day12</title>
</head>
<body>
 
 <!-- validation and fill value -->
 <?php
 $fnameErr = $lnameErr = $emailErr ="";
  $fname = $lname= $email ="";
     if(!empty($_POST))
     {
         if(empty($_POST['fname']))
         {
             $fnameErr = "First Name must be filled";
         }
         else {
             $fname = $_POST['fname'];
         }

         if(empty($_POST['lname']))
         {
             $lnameErr = "Last Name must be filled";
         }
         else {
             $lname = $_POST['lname'];
         }

         if(empty($_POST['email']))
         {
             $emailErr = "Email must be filled";
         }
         else {
             $email = $_POST['email'];
         }
     }
 ?>

 <!-- Form handling in PHP -->
<form action="" method="POST">
First Name:<input type="text" name="fname" value=<?php echo $fname; ?>> <br>
<p><?php echo $fnameErr; ?></p>

Last Name:<input type="text" name="lname" value="<?php echo $lname; ?>"><br>
<p><?php echo $lnameErr; ?></p>

Email:<input type="email" name="email" value=<?php echo $email; ?>><br>
<p><?php echo $emailErr; ?></p>

<input type="submit" name="submit" value="submit">
</form>


<!-- Display Data Of Form -->
<?php
     if(!empty($_POST))
     {
         echo "First Name: ".$_POST['fname']. "<br>";
         echo "Last Name: ".$_POST['lname']. "<br>";
         echo "Email: ".$_POST['email']. "<br><br>";
     }
 ?>

    
</body>
</html>