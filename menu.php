<?php

include "config/db.php";
include "includes/header.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit();
}
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
?>

<div class="hero mb-4">
    Welcome
    <?php echo $_SESSION['user_name']; ?> ☕
</div>

<div class="row">
    <?php while ($product = mysqli_fetch_assoc($result)) { ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="assets/images/<?php echo $product['image']; ?>" class="card-img-top product-img">
                <div class="card-body text-center">
                    <h5 class="fw-bold">
                        <?php echo $product['name']; ?>
                    </h5>

                    <p class="text-muted">
                        <?php echo $product['price']; ?> DT
                    </p>
                    <a href="add_to_cart.php?id=<?php echo $product['id']; ?>" class="btn btn-coffee w-100">
                        Add to Cart
                    </a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<?php include "includes/footer.php"; ?>