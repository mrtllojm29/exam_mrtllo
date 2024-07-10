<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Info</title>
    <!--Bootstrap css-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-dark">
    <br> <br> <br> <br> <br> <br> <br>
    
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body shadow">
                    <h5 class="card-title text-center"><strong>Account Information</strong></h5>
                    <div class="row mb-3">
                        <div class="col-md-4 text-center">
                            <?php
                            // Display image based on gender 
                            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['gender'])) {
                                $gender = $_GET["gender"];
                                $imagePath = ($gender == 'male') ? '/exam_mrtllo/images/boy.jpg' : '/exam_mrtllo/images/girl.jpg';
                                echo "<img src='$imagePath' alt='User Image' class='rounded-circle mb-3' style='width: 300px; height: 350px;'>";
                            } else {
                                // If no gender data is received, display a placeholder image
                                echo "<img src='/path/to/images/placeholder.jpg' alt='User Image' class='rounded-circle mb-3' style='width: 150px; height: 150px;'>";
                            }
                            ?>
                        </div>
                        <div class="col-md-8">
                            <table class="table">
                                <?php
                                // Check if form data is received from the registration form
                                if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['firstname'])) {
                                    // Retrieve form data from URL parameters
                                    $firstname = $_GET["firstname"];
                                    $middlename = $_GET["middlename"];
                                    $lastname = $_GET["lastname"];
                                    $gender = $_GET["gender"];
                                    $age = $_GET["age"];
                                    $nationality = $_GET["nationality"];
                                    $contact_email = $_GET["contact_email"];
                                    $barangay = $_GET["barangay"];
                                    $town = $_GET["town"];
                                    $province = $_GET["province"];

                                    // Display form data with labels aligned to the left
                                    echo "<tr><td><strong>First Name:</strong></td><td>$firstname</td></tr>";
                                    echo "<tr><td><strong>Middle Name:</strong></td><td>$middlename</td></tr>";
                                    echo "<tr><td><strong>Last Name:</strong></td><td>$lastname</td></tr>";
                                    echo "<tr><td><strong>Gender:</strong></td><td>$gender</td></tr>";
                                    echo "<tr><td><strong>Age:</strong></td><td>$age</td></tr>";
                                    echo "<tr><td><strong>Nationality:</strong></td><td>$nationality</td></tr>";
                                    echo "<tr><td><strong>Contact Email:</strong></td><td>$contact_email</td></tr>";
                                    echo "<tr><td><strong>Barangay:</strong></td><td>$barangay</td></tr>";
                                    echo "<tr><td><strong>Town:</strong></td><td>$town</td></tr>";
                                    echo "<tr><td><strong>Province:</strong></td><td>$province</td></tr>";
                                } else {
                                    // If no form data is received, display a message
                                    echo "<tr><td colspan='2' class='text-center'>No account information available.</td></tr>";
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="register.php" class="btn btn-primary me-5">Register New</a>
                        <a href="index.php" class="btn btn-success">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

    <!--Bootstrap js-->
    <script src="js/bootstrap.bundle.min.js.map"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js.map"></script>
</html>