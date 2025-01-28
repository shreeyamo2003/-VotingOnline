<?php
session_start();
require 'db.php';

if ($_SESSION['role'] == 'voter' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $userId = $_SESSION['user_id'];
    $party = $_POST['party'];

    $stmt = $pdo->prepare("INSERT INTO votes (user_id, vote_option) VALUES (?, ?)");
    if ($stmt->execute([$userId, $party])) {
        echo "Vote submitted successfully!";
    } else {
        echo "Error submitting vote. Please try again.";
    }
} else {
    header("Location: index.html");
    exit;
}
?>
