<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container my-5">
        <h2>List of Contacts</h2>
        <a class="btn btn-primary" href='/Learning-PHP/CRUD/create.php' role="button">New Contact</a>
        <br/>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    $servername = 'localhost';
                    $username = 'root';
                    $password = '';
                    $dbname = 'myshop_db';

                    # Create Connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    # Check Connection
                    if ($conn->connect_error) {
                        die('Connection failed: '. $conn->connect_error);
                    }

                    # Read all row from database table
                    $sql = 'SELECT * FROM clients';
                    $result = $conn->query($sql);

                    if (!$result) {
                        die('Invalid Query: '. $conn->connect_error);
                    }

                    # read data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo"
                            <tr>
                                <td>$row[id]</td>
                                <td>$row[Name]</td>
                                <td>$row[Email]</td>
                                <td>$row[Phone]</td>
                                <td>
                                    <a class='btn btn-warning btn-sm' href='/CRUD/edit.php?id=$row[id]'>Edit</a>
                                    <a class='btn btn-danger btn-sm' href='/CRUD/delete.php?id=$row[id]'>Delete</a>
                                </td>
                            </tr>
                        ";
                    }    
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>