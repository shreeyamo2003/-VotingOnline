<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Administrator Dashboard</h2>
    <button onclick="location.href='liveVotingStatus.php'">Live Voting Status</button>
    <button onclick="location.href='publishResults.php'">Publish Results</button>
    <button onclick="location.href='pastVoting.php'">Past Voting</button>
</body>
</html>
