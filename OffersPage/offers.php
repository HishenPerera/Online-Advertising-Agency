<?php
require "../config/connection.php";
$offersTable = 'SELECT * FROM `offers_table` WHERE OfferType = "Gold" OR OfferType = "Silver" ORDER BY ID DESC LIMIT 2';
$offersList = $connection->query($offersTable);
?>
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdHandiya</title>
    <link rel="stylesheet" href="../assets/css/offers.css">
</head>

<body>
    <!--Header-->
    <nav>
        <div class="left-side">
            <div class="logo"><img src="../assets/Images/adlogo.png">
            </div>
            <ul>
                <div class="nav-links">
                    <li><a href="../index.php" class="home-link">Home</a></li>
                    <li><a href="#allads" class="all-ads-link">All Ads</a></li>
                </div>
            </ul>
        </div>
        <ul>
            <div class="right-side">
                <li><a href="../pages/login.php">Login/Register</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="#post" class="postAD-link">Post Your AD!</a></li>
            </div>
        </ul>
    </nav>

    <!-- Offer Title -->
    <div class="offer-titles">
        <h1>WE ARE OFFERING NOW!</h1>
    </div>

    <!-- Offer Cards -->
    <div class="card-background">

        <?php
        if ($offersList->num_rows > 0) {
            while ($row = $offersList->fetch_assoc()) {
                if ($row['OfferType'] == "Gold") {
        ?>
                    <div class="card">
                        <div class="card-content">
                            <div class="offer-type1">
                                <h2><?php echo $row['OfferType']; ?> Offer</h2>
                            </div>

                            <div class="plan-Offers">
                                <h3>Plan Offers</h3>
                                <p><?php echo $row['OffersPlan']; ?></p>
                            </div>

                            <div class="offer-description">
                                <h3>Description</h3>
                                <p>
                                    <?php echo $row['Description']; ?>
                                </p>
                            </div>
                            <div class="offer-deadline">
                                <h3>Deadline</h3>
                                <p><?php echo $row['Deadline']; ?></p>
                            </div>

                            <div class="promocode-card1">
                                <h2>PROMO CODE <br> <small> ( <?php echo $row['Promo Code']; ?> ) </small></h2>
                            </div>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <div class="card">
                        <div class="card-content">
                            <div class="offer-type2">
                                <h2><?php echo $row['OfferType']; ?> Offer</h2>
                            </div>
                            <div class="plan-Offers">
                                <h3>Plan Offers</h3>
                                <p><?php echo $row['OffersPlan']; ?></p>
                            </div>
                            <div class="offer-description">
                                <h3>Description</h3>
                                <p>
                                    <?php echo $row['Description']; ?>
                                </p>
                            </div>
                            <div class="offer-deadline">
                                <h3>Deadline</h3>
                                <p><?php echo $row['Deadline']; ?></p>
                            </div>
                            <div class="promocode-card2">
                                <h2>PROMO CODE <br> <small> ( <?php echo $row['Promo Code']; ?> ) </small></h2>
                            </div>
                        </div>
                    </div>
        <?php
                }
            }
        }
        ?>
    </div>

    <!-- Feedback Button -->
    <div class="feedback">
        <a href="../../FeedbackPage/feedback.php">
            <h2>Give Feedback!</h2>
        </a>
    </div>

    <!-- Footer -->
    <div class="footer">

        <div class="footer-row">

            <div class="footer-logo">
                <img src="../assets/Images/adlogo.png" alt="f-logo">
            </div>

            <div class="footer-followUs">
                <ul>
                    <li>Follow Us</li>
                    <div class="f_uprow-links">
                        <li><a href="#facebook"><img src="../assets/Images/fb.png" alt="fb-logo"></a></li>
                        <li><a href="#Instagram"><img src="../assets/Images/ig.png" alt="Insta-logo"></a></li>
                    </div>

                    <div class="f_downrow-links">
                        <li><a href="#xtwitter"><img src="../assets/Images/xtwitter.png" alt="xtweet-logo"></a></li>


                        <li><a href="#linkedin"><img src="../assets/Images/linkedin.png" alt="linkedin-logo"></a></li>
                    </div>
                </ul>

            </div>

            <div class="footer-helpSup">
                <ul>
                    <li>Help & Support</li>
                    <li><a href="#FAQs">FAQs</a></li>
                    <li><a href="#StaySafe">Stay Safe</a></li>
                    <li><a href="#ContUs">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-aboutUs">
                <ul>
                    <li>About Us</li>
                    <li><a href="#FAQs">About Us</a></li>
                    <li><a href="#StaySafe">Privacy Policy</li>
                    <li><a href="#ContUs">Terms & Conditions</a></li>
                </ul>

            </div>

        </div>

        <div class="right-reserved">
            2024 AdHandiya(PVT)LTD. All Rights Reserved.
        </div>
    </div>

</body>

</html>