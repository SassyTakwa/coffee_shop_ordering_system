<?php

include "config/db.php";
include "includes/header.php";

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM orders WHERE user_id='$user_id' ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
?>
<h2>Your Orders</h2>

<table class="table">
    <tr>
        <th>Order ID</th>
        <th>Total</th>
        <th>Date</th>
    </tr>
    <?php while ($order = mysqli_fetch_assoc($result)) { ?>

        <tr>
            <td>
                <?php echo $order['id']; ?>
            </td>
            <td>
                <?php echo $order['total']; ?> DT
            </td>
            <td>
                <?php echo $order['created_at']; ?>
            </td>
        </tr>
    <?php } ?>
</table>

<?php include "includes/footer.php"; ?>