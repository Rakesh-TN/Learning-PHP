<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants Define() & Joining Variable</title>
</head>
<body>
    <?php
        define("Name","Rakesh");
        define("Inital","TN");
        define("Gender",['Boy', "Girl"]);
    
        #Joining Variable types One
        echo"Hello ".Name." ".Inital." ".Gender[0];

        echo "<br>";

        #Joining Variable types two
       $Fname='Rakesh';
       $Fname.='TN'; 
       echo $Fname;
    ?>
</body>
</html>