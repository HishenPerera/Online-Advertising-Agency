<?php
session_start();
$email = $_SESSION['email'];
$name = $_SESSION['name'];
$id = $_SESSION['id'];
if (!isset($_SESSION['email']) && !isset($_SESSION['name']) && !isset($_SESSION['id'])) {
    header('Location: ../pages/login.php');
}
?>

<!-- Upper Section -->
<div class="upper-section">
    <div class="logo">
        <img src="../assets/Images/adlogo.png" alt="">
    </div>

    <div class="dashboard-name">
        <h2>Admin Dashboard</h2>
    </div>

    <div class="admin-status">
        <ul>
            <li>
                <div class="admin-username">admin_User</div>
            </li>
            <li><a href="../../index.php" class="logout-button">Logout</a></li>
        </ul>
    </div>
</div>