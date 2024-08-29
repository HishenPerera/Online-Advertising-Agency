<?php
include '../config/connection.php';
if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    $getOfferSQL = "SELECT * FROM offers_table WHERE ID=$id";
    $getOffer = $connection->query($getOfferSQL);
    if ($getOffer->num_rows > 0) {
        $row = $getOffer->fetch_assoc();
    }
}
if (isset($_POST['offerType']) && isset($_POST['OfferPlan']) && isset($_POST['Description']) && isset($_POST['Deadline']) && isset($_POST['promocode'])) {
    $offerType = $_POST['offerType'];
    $offerPlan = $_POST['offerPlan'];
    $description = $_POST['description'];
    $deadline = $_POST['deadline'];
    $promocode = $_POST['promocode'];
    $updateOfferSQL = "UPDATE `offers_table` SET `OfferType`='$offerType',`OffersPlan`='$offerPlan',`Description`='$description',`Deadline`='$deadline',`Promo Code`='$promocode' WHERE ID=$id";
    $updateOffer = $connection->query($updateOfferSQL);
    if ($updateOffer) {
        echo "Offer Updated Successfully";
        header('Location: adminManageOffers.php');
    } else {
        echo "Error Updating Offer";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/updateOffers.css">

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
                <h2>Update Offers</h2>
            </div>
            <!-- Manage Offers Section -->
            <div class="manage-offers-section">

                <div class="offer-form">
                    <h2>Make changes to following form to edit the Offer</h2>

                    <form method="post" action="updateOffers.php?ID=<?php echo $row['ID']; ?>">

                        <div class="offer-type">
                            <label>Choose an Offer Type</label>

                            <div class="offer-options">
                                <input type="radio" id="gold" name="offerType" value="Gold" <?php if ($row['OfferType'] == 'Gold') {
                                                                                                echo 'checked';
                                                                                            } ?>>
                                <label for="gold">Gold</label>
                                <input type="radio" id="silver" name="offerType" value="Silver" <?php if ($row['OfferType'] == 'Silver') {
                                                                                                    echo 'checked';
                                                                                                } ?>>
                                <label for="silver">Silver</label>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="ad-offers">Offers Plan</label>
                            <input type="text" id="offers-plan" name="offerPlan" required value="<?php echo $row['OffersPlan']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" required value="<?php echo $row['Description']; ?>"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="deadline">Deadline</label>
                            <input type="date" id="deadline" name="deadline" required value="<?php echo $row['Deadline']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="promocode">Promo-Code</label>
                            <input type="text" id="promocode" name="promocode" required value="<?php echo $row['Promo Code']; ?>">
                        </div>

                        <button type="submit">Update Offer</a></button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="location-sector">
        <div class="jspats">
            <ul>
                <li><a href="" rel="stylesheet" required></li>
            </ul>
        </div>
    </div>
    <!-- Lower Section -->
    <div class="lower-section">

    </div>

</body>

</html>