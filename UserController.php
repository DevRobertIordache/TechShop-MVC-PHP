<?php
require_once __DIR__ . '/../models/User.php';

class UserController {
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username']);
            $password = $_POST['password'];
            $confirm = $_POST['confirm_password'];

            if (empty($username) || empty($password) || empty($confirm)) {
                $error = "All fields are required.";
            } elseif ($password !== $confirm) {
                $error = "Passwords do not match.";
            } elseif (User::findByUsername($username)) {
                $error = "Username already exists.";
            } else {
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                User::create($username, $passwordHash);
                include __DIR__ . '/../includes/header.php';
                echo '<div class="alert alert-success">Registration successful. <a href="?page=login">Login here</a>.</div>';
                include __DIR__ . '/../includes/footer.php';
                return;
            }
            include __DIR__ . '/../includes/header.php';
            include __DIR__ . '/../views/register.php';
            include __DIR__ . '/../includes/footer.php';
        } else {
            include __DIR__ . '/../includes/header.php';
            include __DIR__ . '/../views/register.php';
            include __DIR__ . '/../includes/footer.php';
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username']);
            $password = $_POST['password'];

            if (empty($username) || empty($password)) {
                $error = "Please enter username and password.";
            } else {
                $user = User::findByUsername($username);
                if (!$user || !password_verify($password, $user['password'])) {
                    $error = "Invalid username or password.";
                } else {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    header("Location: index.php");
                    exit;
                }
            }
            include __DIR__ . '/../includes/header.php';
            include __DIR__ . '/../views/login.php';
            include __DIR__ . '/../includes/footer.php';
        } else {
            include __DIR__ . '/../includes/header.php';
            include __DIR__ . '/../views/login.php';
            include __DIR__ . '/../includes/footer.php';
        }
    }

    public function logout() {
        session_destroy();
        header("Location: index.php");
        exit;
    }
}
