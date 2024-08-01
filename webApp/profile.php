<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// Fetch user data from the session or database
$email = $_SESSION['email'];
$username = "Benjamin Tims"; // You can fetch this from the database based on the email
$location = "Los Angeles"; // Example data, fetch from the database if needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            width: 300px;
        }
        .upper img {
            width: 100%;
            height: 150px;
        }
        .profile img {
            margin-top: -50px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="upper">
            <img src="https://i.imgur.com/Qtrsrk5.jpg" class="img-fluid">
        </div>
        <div class="user text-center">
            <div class="profile">
                <img src="https://i.imgur.com/JgYD2nQ.jpg" class="rounded-circle" width="80">
            </div>
        </div>
        <div class="mt-5 text-center">
            <h4 class="mb-0"><?php echo $username; ?></h4>
            <span class="text-muted d-block mb-2"><?php echo $location; ?></span>
            <button class="btn btn-primary btn-sm follow">Follow</button>
            <div class="d-flex justify-content-between align-items-center mt-4 px-4">
                <div class="stats">
                    <h6 class="mb-0">Followers</h6>
                    <span>8,797</span>
                </div>
                <div class="stats">
                    <h6 class="mb-0">Projects</h6>
                    <span>142</span>
                </div>
                <div class="stats">
                    <h6 class="mb-0">Ranks</h6>
                    <span>129</span>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
