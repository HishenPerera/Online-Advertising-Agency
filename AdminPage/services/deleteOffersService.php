<?php
include '../config/connection.php';

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    $deleteOfferSQL = "DELETE FROM `offers_table` WHERE ID=$id ";
    $deleteOffer = $connection->query($deleteOfferSQL);
    if ($deleteOffer) {
        echo "Offer Deleted Successfully";
        header('Location: ../pages/adminManageOffers.php');
    } else {
        echo "Error Deleting Offer";
        header('Location: ../pages/adminManageOffers.php');
    }
}
