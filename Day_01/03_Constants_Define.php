<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants Define()</title>
</head>
<body>
    <?php
        define("Name","Rakesh");
        define("Inital","TN");
        define("Gender",['Boy', "Girl"]);

        echo"Hello ".Name." ".Inital." ".Gender[0];
    ?>
</body>
</html>