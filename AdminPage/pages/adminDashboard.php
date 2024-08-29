<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/adminDashboard.css">

</head>

<body>
    <?php
    include '../includes/header.php';
    ?>
    <!-- Main Content -->
    <div class="main-content">

        <?php
        include '../includes/sidebar.php';
        ?>

        <!-- Page Content -->
        <div class="page-content">
            <div class="dashboard-header">
                <h1>Welcome to Admin Dashboard</h1>
            </div>
            <div class="dashboard-stats">
                <div class="stat-box">
                    <h2>Total Users</h2>
                    <p>1000</p>
                </div>
                <div class="stat-box">
                    <h2>Total Advertisements</h2>
                    <p>500</p>
                </div>
                <div class="stat-box">
                    <h2>Total Revenue</h2>
                    <p>Rs.50,000</p>
                </div>
            </div>

        </div>
    </div>

    </div>



    <!-- Lower Section -->
    <div class="lower-section">

    </div>

</body>

</html>