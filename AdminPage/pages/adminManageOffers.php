<?php
require "../config/connection.php";
$offersTable = 'SELECT * FROM offers_table';
$offersList = $connection->query($offersTable);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/adminManageOffers.css">
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
            <div class="mOffers-title">
                <h2>Manage Offers</h2>
            </div>
            <!-- Manage Offers Section -->
            <div class="manage-offers-section">
                <div class="offers-table-container">
                    <table class="offers-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Offer Type</th>
                                <th>Offers Plan</th>
                                <th>Description</th>
                                <th>Deadline</th>
                                <th>Promo Code</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($offersList->num_rows > 0) {
                                while ($row = $offersList->fetch_assoc()) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['ID']; ?></td>
                                        <td><?php echo $row['OfferType']; ?></td>
                                        <td><?php echo $row['OffersPlan']; ?></td>
                                        <td><?php echo $row['Description']; ?></td>
                                        <td><?php echo $row['Deadline']; ?></td>
                                        <td><?php echo $row['Promo Code']; ?></td>
                                        <td>
                                            <a href="../pages/updateOffers.php?ID=<?php echo $row['ID']; ?>" class="edit-button">Edit</a>
                                            <a href="../services/deleteOffersService.php?ID=<?php echo $row['ID']; ?>" class="delete-button">Delete</a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "No offers found";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
    <!-- Lower Section -->
    <div class="lower-section">
        <div class="footer">
        </div>
    </div>
</body>

</html>