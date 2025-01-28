<?php
session_start();
require 'db.php';

$username = $_GET['username'] ?? null;
$role = $_GET['role'] ?? null;

if ($username && $role) {
    // Fetch the user based on the username and role
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? AND role = ?");
    $stmt->execute([$username, $role]);
    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];

        // Redirect based on the role
        if ($role == 'admin') {
            header("Location: adminDashboard.php");
        } else {
            header("Location: voterDashboard.php");
        }
        exit;
    } else {
        echo "User not found.";
    }
} else {
    echo "Invalid request.";
}
