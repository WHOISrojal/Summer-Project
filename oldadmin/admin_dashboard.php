<?php
session_start();

// Check if the admin is not logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin_login.php");
    exit();
}
?>

<!-- Admin Dashboard HTML code -->
<h2>Welcome to the Admin Dashboard</h2>
<ul>
    <li><a href="manageproducts.php">Manage Products</a></li>
    <!-- Add more links for other admin functionalities -->
</ul>