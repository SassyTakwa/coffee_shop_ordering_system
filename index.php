<!DOCTYPE html>
<html>

<head>
    <title>Coffee Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <a href="menu.php">
        <button>Order Now</button>
    </a>
</head>

<body>
    <h1>☕ Welcome to My Coffee Shop</h1>
    <p>Fresh coffee. Online ordering.</p>
    <button>Order Now</button>
</body>

</html>

<?php
header("Location: menu.php");
exit();
?>