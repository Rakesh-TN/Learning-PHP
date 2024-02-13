<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Class</title>
    <style>
        table {
            border: 1px solid blueviolet;
        }
    </style>
</head>

<body>
    <div>
        <?php
        // Sample Program
        echo "Hello Rakesh!";
        ?>
    </div>
    <div>
        <!-- Mixing PHP with HTML -->
        <table>
            <thead>
                <th>S.No</th>
                <th>Name</th>
                <th>Attendence</th>
            </thead>
            <tbody>
                <?php
                echo "
            <tr>
                <td>1.</td>
                <td>Rakesh</td>
                <td>Present</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Sivasuban</td>
                <td>Present</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Prabavathi</td>
                <td>Present</td>
            </tr>
            ";
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>