<?php
include '../config/connection.php';
if (isset($_POST['submit'])) {
    $offerType = $_POST['offerType'];
    $offerPlan = $_POST['offerPlan'];
    $description = $_POST['description'];
    $deadline = $_POST['deadline'];
    $promocode = $_POST['promocode'];

    $addOfferSQL = "INSERT INTO `offers_table`(`OfferType`, `OffersPlan`, `Description`, `Deadline`, `Promo Code`) VALUES ('$offerType','$offerPlan','$description','$deadline','$promocode')";
    $addOffer = $connection->query($addOfferSQL);
    if ($addOffer) {
        echo "Offer Added Successfully";
        header('Location: adminManageOffers.php');
    } else {
        echo "Error Adding Offer";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/addNewOffers.css">

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
                <h2>Add New Offer</h2>
            </div>
            <!-- Manage Offers Section -->
            <div class="manage-offers-section">

                <div class="offer-form">
                    <h2>Fill the form to add a New Offer!</h2>

                    <form action="addNewOffers.php" method="post">

                        <div class="offer-type">
                            <label>Choose an Offer Type</label>

                            <div class="offer-options">
                                <input type="radio" id="gold" name="offerType" value="Gold">
                                <label for="gold">Gold</label>
                                <input type="radio" id="silver" name="offerType" value="Silver">
                                <label for="silver">Silver</label>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="ad-offers">Offers Plan</label>
                            <input type="text" id="offers-plan" name="offerPlan" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="deadline">Deadline</label>
                            <input type="date" id="deadline" name="deadline" required>
                        </div>

                        <div class="form-group">
                            <label for="promocode">Promo-Code</label>
                            <input type="text" id="promocode" name="promocode" required>
                        </div>

                        <button type="submit" name="submit">Add Offer</button>

                    </form>
                </div>
            </div>
        </div>


    </div>



    <!-- Lower Section -->
    <div class="lower-section">

    </div>

</body>

</html>