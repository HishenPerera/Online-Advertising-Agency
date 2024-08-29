<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Portal</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
<div class="content">
    <h3><u>Payment Portal</u></h3>
    <div class="portal-head">
        <span class="portal-title">Select Your Payment Type :</span>
        <input type="radio" id="type" name="type"value="VISA">
        <label for="visa">
            <img class="visa-logo" src="images/img2.jpg">
        </label>
        <input type="radio" id="mastercard" name="type" value="Mastercard">
        <label for="mastercard">
            <img class="mastercard-logo" src="images/img1.jpg">
        </label>
    </div>
    <div class="portal-form">
        <form method="post" action="paymenthandler.php">
            <div class="inputs">
                <input class="form-input" type="text" id="card-no" name="card-no" placeholder="Card Number"><br>
            </div>
            <div class="inputs">
                <input class="form-input" type="text" id="c-name" name="c-name" placeholder="Cardholder's Name"><br>
            </div>
            <div class="inputs">
                <input class="form-input" type="text" id="exp-date" name="exp-date" placeholder="Expiration"><br>
            </div>
            <div class="inputs">
                <input class="form-input" type="text" id="cvv" name="cvv" placeholder="cvv"><br>
            </div>
            <div  class="button">
                <input class="button" type="submit" value="Pay Now">
            </div>
        </form>
    </div>
</div>
</body>
<</html>