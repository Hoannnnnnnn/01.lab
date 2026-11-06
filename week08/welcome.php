<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include("header.inc"); ?>

<h1>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h1>

<p>Your Token: <strong><?php echo htmlspecialchars($_SESSION['token'] ?? ''); ?></strong></p>

<?php include("footer.inc"); ?>