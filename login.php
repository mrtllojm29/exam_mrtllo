<?php
// Hold or defining the correct username and password
$correctUsername = "moratillo";
$correctPassword = "qwerty";

// Initialize variables for user input empty string and error message
$username = $password = "";
$error = "";

// Check if the form is submitted and validate the scripts
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username and password are provided
    if (empty($username) || empty($password)) {
        $error = "Username and password are required.";
    } else {
        // Check if the username and password are correct
        if ($username === $correctUsername && $password === $correctPassword) {
            // Redirect to dashboard page
            header("Location: dashboard.php");
            exit();
        } else {
            // error message 
            $error = "Incorrect username or password.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <!--Bootstrap css-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-dark">
<br><br><br><br><br><br><br><br><br>

<!--Login form-->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow p-3 mb-5 bg-secondary rounded text-bg-primary">
                <div class="card-body">
                    <h5 class="card-title text-center">Login</h5>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="text-center mt-3">
                            <a href="index.php" class="btn btn-success">Back to Home</a>
                        </div>
                        <?php if (!empty($error)) { ?>
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <?php echo $error; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
    <!--Bootstrap js-->
    <script src="js/bootstrap.bundle.min.js.map"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>


</html>
