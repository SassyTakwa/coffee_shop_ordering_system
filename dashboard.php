<?php

include "../config/db.php";

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

?>

<h2>Admin Dashboard</h2>
<a href="add_product.php">Add Coffee</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Image</th>
    </tr>

    <?php while ($product = mysqli_fetch_assoc($result)) { ?>

        <tr>
            <td>
                <?php echo $product['id']; ?>
            </td>
            <td>
                <?php echo $product['name']; ?>
            </td>
            <td>
                <?php echo $product['price']; ?> DT
            </td>
            <td>
                <img src="../assets/images/<?php echo $product['image']; ?>" width="80">
            </td>
        </tr>
    <?php } ?>
</table>