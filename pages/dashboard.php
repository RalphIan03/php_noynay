<?php
$name = $_GET['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChaffGpt2</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>
    <nav class="navbar">
        <div class="logo">ChaffGPT</div>

        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

        <a href="#" class="login-btn">Login</a>
    </nav>

    <h1>Welcome <?= $name ?> Have a nice day!</h1>
</body>

</html>