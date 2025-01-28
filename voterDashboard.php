<?php
session_start();
if ($_SESSION['role'] !== 'voter') {
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Voter Dashboard</title>
</head>
<body>
    <h2>Voter Dashboard</h2>
    <form action="submitVote.php" method="POST">
        <h3>Select a Party to Vote For:</h3>
        <label><input type="radio" name="party" value="A" required> Party A</label><br>
        <label><input type="radio" name="party" value="B"> Party B</label><br>
        <label><input type="radio" name="party" value="C"> Party C</label><br>
        <label><input type="radio" name="party" value="D"> Party D</label><br>
        <label><input type="radio" name="party" value="E"> Party E</label><br>
        <button type="submit">Submit Vote</button>
    </form>
</body>
</html>
