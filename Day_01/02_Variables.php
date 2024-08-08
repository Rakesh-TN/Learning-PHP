<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable In PHP</title>
</head>

<body>
    <?php
    // Variables in PHP
    $firstname = "Rakesh";
    $lastname = "TN";
    $email = "tnrakesh68@gmail.com";
    $phonenumber = "9003954205";
    $gender = "Male"
    ?>
    <h1> Variable Print </h1>
    <table>
        <tr>
            <td>First Name :</td>
            <td>
                <?php echo $firstname ?>
            </td>
        </tr>
        <tr>
            <td>Last Name :</td>
            <td>
                <?php echo $lastname ?>
            </td>
        </tr>
        <tr>
            <td>Sex :</td>
            <td>
                <?php echo $gender ?>
            </td>
        </tr>
        <tr>
            <td>E-Mail Id :</td>
            <td>
                <?php echo $email ?>
            </td>
        </tr>
        <tr>
            <td>Ph Number :</td>
            <td>
                <?php echo $phonenumber ?>
            </td>
        </tr>
    </table>
    <?php
    // Variable Destroyer
    #unset($gender);
    
    // display the data with types
    var_dump($firstname);
    var_dump($lastname);
    var_dump($phonenumber);
    var_dump($gender);
    ?>
</body>

</html>