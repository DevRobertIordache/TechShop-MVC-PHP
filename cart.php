<h2>Shopping Cart</h2>
<?php if (empty($_SESSION['cart'])): ?>
    <p>Your cart is empty.</p>
<?php else: ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th><th>Price</th><th>Quantity</th><th>Total</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $grand_total = 0;
            foreach ($_SESSION['cart'] as $id => $quantity):
                $product = Product::getById($id);
                $total = $product['price'] * $quantity;
                $grand_total += $total;
            ?>
            <tr>
                <td><?php echo htmlspecialchars($product['name']); ?></td>
                <td>$<?php echo number_format($product['price'], 2); ?></td>
                <td><?php echo $quantity; ?></td>
                <td>$<?php echo number_format($total, 2); ?></td>
                <td><a href="?page=remove_from_cart&id=<?php echo $id; ?>" class="btn btn-danger btn-sm">Remove</a></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="3"><strong>Grand Total</strong></td>
                <td colspan="2"><strong>$<?php echo number_format($grand_total, 2); ?></strong></td>
            </tr>
        </tbody>
    </table>
    <a href="index.php" class="btn btn-primary">Continue Shopping</a>
<?php endif; ?>
