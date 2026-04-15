<?php

include "config/db.php";
include "includes/header.php";

$total = 0;

?>

<h2 class="mb-4">Your Cart 🛒</h2>

<?php if (!empty($_SESSION['cart'])) { ?>

  <table class="table table-bordered align-middle">
    <tr>
      <th>Product</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Total</th>
      <th></th>
    </tr>

    <?php

    foreach ($_SESSION['cart'] as $product_id => $qty) {
      $sql = "SELECT * FROM products WHERE id=$product_id";
      $result = mysqli_query($conn, $sql);
      $product = mysqli_fetch_assoc($result);
      $subtotal = $product['price'] * $qty;
      $total += $subtotal;
      ?>

      <tr>
        <td>
          <img src="assets/images/<?php echo $product['image']; ?>" width="60">
          <?php echo $product['name']; ?>
        </td>

        <td>
          <?php echo $product['price']; ?> DT
        </td>

        <td>
          <a href="update_cart.php?action=decrease&id=<?php echo $product_id; ?>" class="btn btn-light">-</a>
          <?php echo $qty; ?>
          <a href="update_cart.php?action=increase&id=<?php echo $product_id; ?>" class="btn btn-light">+</a>
        </td>

        <td>
          <?php echo $subtotal; ?> DT
        </td>
        <td>
          <a href="remove_from_cart.php?id=<?php echo $product_id; ?>" class="btn btn-danger">
            Remove
          </a>
        </td>
      </tr>
    <?php } ?>

  </table>
  <h4 class="text-end">Total:
    <?php echo $total; ?> DT
  </h4>
  <a href="checkout.php" class="btn btn-coffee float-end">
    Checkout
  </a>

<?php } else { ?>
  <p>Your cart is empty</p>

<?php } ?>
<a href="menu.php" class="btn btn-coffee mt-3">
  Back to Menu
</a>
<?php include "includes/footer.php"; ?>