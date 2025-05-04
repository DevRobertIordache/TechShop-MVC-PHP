<?php
session_start();
require __DIR__ . '/../includes/config.php';
require __DIR__ . '/../controllers/UserController.php';
require __DIR__ . '/../controllers/ProductController.php';
require __DIR__ . '/../controllers/CartController.php';

$page = $_GET['page'] ?? null;

switch ($page) {
    case 'register':
        (new UserController())->register();
        break;
    case 'login':
        (new UserController())->login();
        break;
    case 'logout':
        (new UserController())->logout();
        break;
    case 'add_product':
        (new ProductController())->add();
        break;
    case 'edit_product':
        (new ProductController())->edit();
        break;
    case 'delete_product':
        (new ProductController())->delete();
        break;
    case 'add_to_cart':
        (new CartController())->add();
        break;
    case 'view_cart':
        (new CartController())->view();
        break;
    case 'remove_from_cart':
        (new CartController())->remove();
        break;
    default:
        (new ProductController())->index();
        break;
}
