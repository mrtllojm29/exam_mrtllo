<?php
// Define variables and initialize them to empty values
$firstname = $middlename = $lastname = $gender = $age = $nationality = $contact_email = $barangay = $town = $province = "";
$error = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate required fields
    if (empty($_POST["firstname"]) || empty($_POST["lastname"]) || empty($_POST["gender"]) || empty($_POST["age"]) || empty($_POST["nationality"]) || empty($_POST["contact_email"]) || empty($_POST["barangay"]) || empty($_POST["town"]) || empty($_POST["province"])) {
        $error = "All fields are required to fill up.";
    } elseif (!is_numeric($_POST["age"]) || $_POST["age"] >= 23) {
        $error = "You must be below 23 years old to register.";
    } else {
        $firstname = test_input($_POST["firstname"]);
        $middlename = test_input($_POST["middlename"]);
        $lastname = test_input($_POST["lastname"]);
        $gender = test_input($_POST["gender"]);
        $age = test_input($_POST["age"]);
        $nationality = test_input($_POST["nationality"]);
        $contact_email = test_input($_POST["contact_email"]);
        $barangay = test_input($_POST["barangay"]);
        $town = test_input($_POST["town"]);
        $province = test_input($_POST["province"]);

        // Redirect to account information page with form data as URL parameters
        header("Location: account.php?firstname=$firstname&middlename=$middlename&lastname=$lastname&gender=$gender&age=$age&nationality=$nationality&contact_email=$contact_email&barangay=$barangay&town=$town&province=$province");
        exit();
    }
}

// Function to sanitize form input
function test_input($data) {
    $data = trim($data); // Trim whitespace
    $data = stripslashes($data); // Remove backslashes
    $data = htmlspecialchars($data); // Convert special characters to HTML entities
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    
    <!--Bootstrap css-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="text-bg-dark">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light">
                <div class="card-body shadow">
                    <h5 class="card-title text-center">Registration Form</h5>
                 
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="firstname" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $firstname; ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="middlename" class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" id="middlename" name="middlename" value="<?php echo $middlename; ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="lastname" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $lastname; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" name="gender">
                                        <option value="">Select Gender</option>
                                        <option value="male" <?php if ($gender == "male") echo "selected"; ?>>Male</option>
                                        <option value="female" <?php if ($gender == "female") echo "selected"; ?>>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="number" class="form-control" id="age" name="age" value="<?php echo $age; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nationality" class="form-label">Nationality</label>
                            <input type="text" class="form-control" id="nationality" name="nationality" value="<?php echo $nationality; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="contact_email" class="form-label">Contact Email</label>
                            <input type="email" class="form-control" id="contact_email" name="contact_email" value="<?php echo $contact_email; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="barangay" class="form-label">Barangay</label>
                            <input type="text" class="form-control" id="barangay" name="barangay" value="<?php echo $barangay; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="town" class="form-label">Town</label>
                            <input type="text" class="form-control" id="town" name="town" value="<?php echo $town; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="province" class="form-label">Province</label>
                            <input type="text" class="form-control" id="province" name="province" value="<?php echo $province; ?>">
                        </div>
                        <?php if (!empty($error)) { ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo $error; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php } ?>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Register</button>
                            <br><br>
                            <a href="index.php" class="btn btn-success">Back to Home</a>
                        </div>
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

