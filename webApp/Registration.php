<?php
// Start the session
session_start();

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Validate form data
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword)) {
        echo "All fields are required.";
        exit();
    }

    if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if the email already exists
    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Email already exists.";
        mysqli_close($conn);
        exit();
    }

    // SQL query to insert new user data
    $sql = "INSERT INTO user (first_name, last_name, email, password) VALUES ('$firstName', '$lastName', '$email', '$hashedPassword')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Registration successful
        $_SESSION['email'] = $email;
        echo "Registration successful! Welcome, " . $firstName;
    } else {
        // Registration failed
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
} else {
    echo "Invalid request.";
}
?>
