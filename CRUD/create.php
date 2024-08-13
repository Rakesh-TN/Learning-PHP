<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'myshop_db';

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$personName = "";
$personEmail = "";
$personNumber = "";

$errorMessage = '';
$successMessage = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $personName = $_POST["Name"] ?? '';
    $personEmail = $_POST["Email"] ?? '';
    $personNumber = $_POST["Phone"] ?? '';

    if (empty($personName) || empty($personEmail) || empty($personNumber)) {
        $errorMessage = 'All fields are required';
    } else {
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO clients (Name, Email, Phone) VALUES (?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("sss", $personName, $personEmail, $personNumber);
            if ($stmt->execute()) {
                $successMessage = 'Contact created successfully';
                $personName = "";
                $personEmail = "";
                $personNumber = "";
                header('Location: /Learning-PHP/CRUD/index.php');
                exit();
            } else {
                $errorMessage = "Execute failed: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $errorMessage = "Prepare failed: " . $conn->error;
        }
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>
<body>
    <div class="container my-5">
        <h2>New Contact</h2>

        <?php if (!empty($errorMessage)): ?>
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong><?php echo htmlspecialchars($errorMessage); ?></strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
        <?php endif; ?>

        <?php if (!empty($successMessage)): ?>
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong><?php echo htmlspecialchars($successMessage); ?></strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <div class="row mb-3">
                <label for="Name" class="col-sm-3 col-form-label">Name :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Name" value="<?php echo htmlspecialchars($personName); ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="Email" class="col-sm-3 col-form-label">Email :</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="Email" value="<?php echo htmlspecialchars($personEmail); ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="Phone" class="col-sm-3 col-form-label">Phone Number :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Phone" value="<?php echo htmlspecialchars($personNumber); ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-primary" href="/Learning-PHP/CRUD/index.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
