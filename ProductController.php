<?php
require_once __DIR__ . '/../models/Product.php';

class ProductController {
    public function index() {
        $products = Product::getAll();
        include __DIR__ . '/../includes/header.php';
        include __DIR__ . '/../views/products_list.php';
        include __DIR__ . '/../includes/footer.php';
    }

    public function add() {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php");
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name']);
            $description = trim($_POST['description']);
            $price = $_POST['price'];
            $stock = $_POST['stock'];

            if (empty($name) || empty($price) || empty($stock)) {
                $error = "Name, price, and stock are required.";
            } elseif (!is_numeric($price) || !is_numeric($stock)) {
                $error = "Price and stock must be numbers.";
            } else {
                Product::create($name, $description, $price, $stock);
                header("Location: index.php");
                exit;
            }
            include __DIR__ . '/../includes/header.php';
            include __DIR__ . '/../views/add_product.php';
            include __DIR__ . '/../includes/footer.php';
        } else {
            include __DIR__ . '/../includes/header.php';
            include __DIR__ . '/../views/add_product.php';
            include __DIR__ . '/../includes/footer.php';
        }
    }

    public function edit() {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php");
            exit;
        }
        if (!isset($_GET['id'])) {
            header("Location: index.php");
            exit;
        }
        $product = Product::getById($_GET['id']);
        if (!$product) {
            header("Location: index.php");
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name']);
            $description = trim($_POST['description']);
            $price = $_POST['price'];
            $stock = $_POST['stock'];

            if (empty($name) || empty($price) || empty($stock)) {
                $error = "Name, price, and stock are required.";
            } elseif (!is_numeric($price) || !is_numeric($stock)) {
                $error = "Price and stock must be numbers.";
            } else {
                Product::update($_GET['id'], $name, $description, $price, $stock);
                header("Location: index.php");
                exit;
            }
            include __DIR__ . '/../includes/header.php';
            include __DIR__ . '/../views/edit_product.php';
            include __DIR__ . '/../includes/footer.php';
        } else {
            include __DIR__ . '/../includes/header.php';
            include __DIR__ . '/../views/edit_product.php';
            include __DIR__ . '/../includes/footer.php';
        }
    }

    public function delete() {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php");
            exit;
        }
        if (isset($_GET['id'])) {
            Product::delete($_GET['id']);
        }
        header("Location: index.php");
        exit;
    }
}
