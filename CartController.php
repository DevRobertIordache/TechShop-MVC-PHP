<?php
require_once __DIR__ . '/../models/Product.php';

class CartController {
    public function add() {
        if (!isset($_GET['id'])) {
            header("Location: index.php");
            exit;
        }
        $id = $_GET['id'];
        $product = Product::getById($id);
        if (!$product) {
            header("Location: index.php");
            exit;
        }
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]++;
        } else {
            $_SESSION['cart'][$id] = 1;
        }
        header("Location: index.php?page=view_cart");
        exit;
    }

    public function view() {
        include __DIR__ . '/../includes/header.php';
        include __DIR__ . '/../views/cart.php';
        include __DIR__ . '/../includes/footer.php';
    }

    public function remove() {
        if (!isset($_GET['id'])) {
            header("Location: index.php?page=view_cart");
            exit;
        }
        $id = $_GET['id'];
        if (isset($_SESSION['cart'][$id])) {
            unset($_SESSION['cart'][$id]);
        }
        header("Location: index.php?page=view_cart");
        exit;
    }
}
