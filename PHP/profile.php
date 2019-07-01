<?php
   // start session
   session_start();
	if($_SESSION['loggedIn'] !== true) {
		header('Location: Day14.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day14,Day15,Day16</title>
</head>
<body>
    <!-- Fetch Data from another web page -->
    <?php include 'db.php';?>

    <h1>Profile page</h1>
<?php

    echo "welcome user<br>";
        
        echo $_SESSION['userDetail']['id']."<br>";
        echo $_SESSION['userDetail']['first_name']."<br>";
        echo $_SESSION['userDetail']['last_name']."<br>";
        echo $_SESSION['userDetail']['email']."<br><br>";
      
 ?>
 <a href="logout.php">Logout</a><br><br>

 

    <!-- validation and fill value -->
 <?php

 $titleErr =$desErr="";
 $title = $des="";
 $status=true;
 $id= $_SESSION['userDetail']['id'];
 $postsResult="";

 $servername="localhost";
 $username="root";
 $password="";
 $db="blog_test";
 $conn = new mysqli($servername, $username, $password, $db);

 //Check Error
         if($conn->connect_error)
         {
             die("Connection Failed: ". $conn->connect_error);
         }


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
     

     if($status)
     {
         // Insert Into Database
         $sql="INSERT INTO post (title, description, user_id)
               values('$title','$des', '$id')";
         $result = $conn->query($sql);
            
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


    <?php
    
    $sql = "SELECT title, description FROM post INNER JOIN users ON post.user_id = users.id WHERE user_id = $id";
	$postsResult = $conn->query($sql);

    while($row = $postsResult->fetch_assoc())
    {
		echo "<div><h3>".$row["title"]."</h3>";
		echo "<p>".$row["description"]."<p></div>";
    }	
    
    $conn->close();
    
    ?>
    
</body>
</html>