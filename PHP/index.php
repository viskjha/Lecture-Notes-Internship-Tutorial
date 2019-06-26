<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day11</title>
</head>
<body>
    <?php

    //    Print in PHP
       echo "<h1>Hello World</h1>";

       $firstName = "vishal";
       $lastName = "jha";
       echo "First Name: $firstName" . "<br>";
       echo "Last Name: $lastName <br>";


    //    If condition in PHP

       $x=10000;
       if($x <= 100)
       {
           echo " Gift Rose";
       }
        else if($x > 500 && $x<=2000)
       {
           echo " Gift Perfume";
       }
       else if($x > 2000 && $x <= 5000)
       {
           echo " Date";
       }
       else if($x > 5000)
       {
           echo " Ring<br>";
       }


    //    Display Length, type And Data
       var_dump($firstName);
       echo "<br>";



    //    Switch statement in PHP
       $x=2;
       switch ($x) {
           case 1:
               echo "one";
               break;
            

            case 2:
               echo "Two";
               break;

            case 3:
               echo "Three";
               break;
           
            default:
               echo "Five";
               break;
       }
       
    ?>
</body>
</html>