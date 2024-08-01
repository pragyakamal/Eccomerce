<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL query to check if the email and password match
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if any record found
    if (mysqli_num_rows($result) > 0) {
        // Login successful
        $_SESSION['email'] = $email;
        echo "Login successful! Welcome, " . $email;
    } else {
        // Login failed
        echo "Invalid email or password.";
    }

    // Close the connection
    mysqli_close($conn);
}
?>


