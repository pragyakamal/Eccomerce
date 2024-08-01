<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // User is not logged in, redirect to login page
    header("Location: index.html");
    exit();
}

// User is logged in, show the protected content
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>
    <p>You are logged in as <?php echo htmlspecialchars($_SESSION['email']); ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
