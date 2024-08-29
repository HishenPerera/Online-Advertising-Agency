<?php
// Retrieve the values from the posted form
$card_number = $_POST['card-no'];
$cardholder_name = $_POST['c-name'];
$expiration_date = $_POST['exp-date'];
$cvv = $_POST['cvv'];

// Print the values
echo "Card Number: " . $card_number . "<br>";
echo "Cardholder's Name: " . $cardholder_name . "<br>";
echo "Expiration Date: " . $expiration_date . "<br>";
echo "CVV: " . $cvv . "<br>";
?>
