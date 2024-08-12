<?php
$personName = "";
$personEmail = "";
$personNumber = "";

$errorMessage = '';
$successMessage = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $personName = $_POST["Name"];
    $personEmail = $_POST["Email"];
    $personNumber = $_POST["Phone"];
}

do {
    if (empty($personName) || empty($personEmail) || empty($personNumber)) {
        $errorMessage = 'All the fields are required';
        break;
    }

    $personName = "";
    $personEmail = "";
    $personNumber = "";

    $successMessage = 'Client Added Corrently';

} while (false);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container my-5">
        <h2>New Contact</h2>

        <?php
        if (!empty($errorMessage)) {
            echo "  <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>$errorMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
        }
        ?>

        <form action="" method="get">
            <div class="row mb-3">
                <label for="Name" class="col-sm-3 col-form-label">Name :</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Name" value="<?php echo $personName ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="Email" class="col-sm-3 col-form-label">Email :</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="Email" value="<?php echo $personEmail ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="Number" class="col-sm-3 col-form-label">Phone Number :</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="Phone" value="<?php echo $personNumber ?>">
                </div>
            </div>

            <?php
        if (!empty($errorMessage)) {
            echo "  <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$successMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
        }
        ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                <div class="col-sm-3 d-grid">
                    <a class="btn btn-primary" href="/CRUD/index.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>