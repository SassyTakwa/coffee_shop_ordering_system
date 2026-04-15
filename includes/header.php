<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Coffee Shop</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="manifest" href="/coffee-shop/manifest.json">
    <meta name="theme-color" content="#6f4e37">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand" href="menu.php">☕ Coffee Shop</a>

            <div>

                <?php if (isset($_SESSION['user_id'])) { ?>

                    <a href="cart.php" class="btn btn-outline-light">Cart</a>

                    <a href="auth/logout.php" class="btn btn-danger">Logout</a>

                <?php } else { ?>

                    <a href="auth/login.php" class="btn btn-light">Login</a>

                    <a href="auth/register.php" class="btn btn-light">Register</a>

                <?php } ?>

            </div>

        </div>
    </nav>

    <div class="container mt-4"></div>