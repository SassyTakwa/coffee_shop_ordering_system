<?php
session_start();

if ($_SESSION['role'] != 'admin') {
    header("Location: home.php");
    exit();
}
?>

<h1>Admin Panel 👑</h1>
<a href="manage_products.php">Manage Products</a>
<a href="view_orders.php">View Orders</a>