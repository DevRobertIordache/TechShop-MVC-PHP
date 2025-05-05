<!DOCTYPE html>
<html>
<head>
    <title>Tech Shop</title>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../public/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="index.php">Tech Shop</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Products</a></li>
        <?php
        $cart_count = 0;
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $qty) {
                $cart_count += $qty;
            }
        }
        ?>
        <?php if (isset($_SESSION['user_id'])): ?>
          <li class="nav-item"><a class="nav-link" href="?page=add_product">Add Product</a></li>
          <li class="nav-item"><a class="nav-link" href="?page=view_cart">Cart (<?php echo $cart_count; ?>)</a></li>
          <li class="nav-item"><a class="nav-link" href="?page=logout">Logout</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="?page=login">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="?page=register">Register</a></li>
          <li class="nav-item"><a class="nav-link" href="?page=view_cart">Cart (<?php echo $cart_count; ?>)</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-4">
