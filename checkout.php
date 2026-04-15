<?php

include "config/db.php";
include "includes/header.php";

$user_id = $_SESSION['user_id'];
$total = 0;
foreach ($_SESSION['cart'] as $id => $qty) {
    $sql = "SELECT * FROM products WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($result);
    $total += $product['price'] * $qty;
}

mysqli_query($conn, "INSERT INTO orders(user_id,total) VALUES('$user_id','$total')");
$order_id = mysqli_insert_id($conn);
foreach ($_SESSION['cart'] as $id => $qty) {
    $sql = "SELECT * FROM products WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($result);
    $price = $product['price'];

    mysqli_query($conn, "
INSERT INTO order_items(order_id,product_id,quantity,price)
VALUES('$order_id','$id','$qty','$price')
");
}
unset($_SESSION['cart']);
?>

<h2 class="text-center mt-5">
    Order placed successfully ☕
</h2>

<a href="menu.php" class="btn btn-coffee mt-3">
    Back to Menu
</a>

<?php include "includes/footer.php"; ?>