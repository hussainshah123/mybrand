<?php
// Database connection details
$servername = "localhost";  // Or your database server
$username = "root";         // Database username
$password = "";             // Database password
$dbname = "myshop";        // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $product_name = $_POST['product_name'];

    // Check if user exists
    $sql = "SELECT * FROM info WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User exists, insert product
        $row = $result->fetch_assoc();
        $user_id = $row['id'];

        $insert_product = "INSERT INTO products (product_name, user_id) VALUES (?, ?)";
        $product_stmt = $conn->prepare($insert_product);
        $product_stmt->bind_param("si", $product_name, $user_id);

        if ($product_stmt->execute()) {
            echo "Product '$product_name' added successfully.";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Invalid username or password.";
    }

    $stmt->close();
    $conn->close();
}
?>
