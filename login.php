<?php
// Include header
include('header.php');

// Database connection details
$servername = "localhost";  // Your database server
$dbUsername = "root";       // Database username
$dbPassword = "";           // Database password
$dbName = "myshop";        // Your database name

// Create a database connection
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

// Check if connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $password = $_POST['password'];
    $productName = $_POST['product'] ?? '';

    // Optional: Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind the SQL query to insert data
    $sql = "INSERT INTO info (name, email, city, password, product) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $city, $hashedPassword, $productName);

    // Execute the query
    if ($stmt->execute()) {
        echo "<div class='alert alert-success text-center'>Data inserted successfully!</div>";
    } else {
        echo "<div class='alert alert-danger text-center'>Error: " . $conn->error . "</div>";
    }

    // Close the statement and connection
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Add Product</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .login-container {
            margin-top: 50px;
        }
        .login-form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Login & Add Product</h2>
            <form method="post" class="login-form">
                <!-- Username Field -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="name" id="username" placeholder="Enter your username" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" name="city" class="form-control" id="city" placeholder="Enter your city">
                </div>
                
                <!-- Password Field -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                </div>
                
                <!-- Product Name Field -->
                <div class="mb-3">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="product" id="productName" placeholder="Enter the product name" required>
                </div>
                
                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include("footer.php"); ?>
