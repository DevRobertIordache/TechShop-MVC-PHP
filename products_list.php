<h2>Product List</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?php echo htmlspecialchars($product['name']); ?></td>
            <td><?php echo htmlspecialchars($product['description']); ?></td>
            <td>$<?php echo number_format($product['price'], 2); ?></td>
            <td><?php echo $product['stock']; ?></td>
            <td>
                <a href="?page=add_to_cart&id=<?php echo $product['id']; ?>" class="btn btn-primary btn-sm">Add to Cart</a>
                <?php if (isset($_SESSION['user_id'])): ?>
                <a href="?page=edit_product&id=<?php echo $product['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="?page=delete_product&id=<?php echo $product['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
