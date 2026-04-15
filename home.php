<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<style>
    body {
        background-color: #f8f5f2;
    }

    .navbar {
        background-color: #3e2723;
    }

    .navbar a {
        color: white;
    }

    .hero {
        height: 400px;
        background: url('images/coffee-shop.jpg') center/cover no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-shadow: 2px 2px 5px black;
    }

    .card {
        border: none;
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .btn-dark {
        background-color: #5d4037;
        border: none;
    }

    .btn-dark:hover {
        background-color: #3e2723;
    }
</style>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">☕ Coffee Shop</a>
        <div>
            <a href="cart.php" class="btn btn-coffee btn-sm">Cart 🛒</a>
            <a href="orders.php" class="btn btn-light btn-sm">Orders 📋</a>
            <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </div>
    <div class="hero">
        <h1 class="display-4 fw-bold">Welcome to Our Coffee World ☕</h1>
    </div>
</nav>

<h2>Welcome
    <?php echo $_SESSION['user_name']; ?> ☕
</h2>
<a href="logout.php">Logout</a>