<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Corrected query with placeholders
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? AND role = ?");
    $stmt->execute([$username, $role]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];

        if ($role == 'admin') {
            header("Location: adminDashboard.php");
        } else {
            header("Location: voterDashboard.php");
        }
    } else {
        echo "Invalid credentials.";
    }
}
?>
