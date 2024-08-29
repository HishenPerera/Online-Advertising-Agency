<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <div class="containe">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="musical-notes-outline"></ion-icon>
                        </span>
                        <span class="title">ADහංදිය!</span>
                    </a>
                </li>

                <li>
                    <a href="index.html">
                        <span class="icon">
                            <ion-icon name="home-outline" active></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>


                <li>
                    <a id="manage" href="manage.html">
                        <span class="icon">
                            <ion-icon name="cog"></ion-icon>
                        </span>
                        <span class="title">Manage account</span>
                    </a>
                </li>


                <li>
                    <a href="myAds.html">
                        <span class="icon">
                            <ion-icon name="list"></ion-icon>
                        </span>
                        <span class="title">My ads</span>
                    </a>
                </li>

                <li>
                    <a id="payment" href="payment.html?">
                        <span class="icon">
                            <ion-icon name="card"></ion-icon>
                        </span>
                        <span class="title">Payments</span>
                    </a>
                </li>


                <li>
                    <a href="../index.php">
                        <span class="icon">
                            <ion-icon name="log-out"></ion-icon>
                        </span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>


        <!--*****main*******-->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="search here">
                        <ion-icon name="search"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="./image/download.png">
                </div>
            </div>

            <!--********creating cards*******-->
            <div class="cardbox">
                <div class="card">
                    <div>
                        <div class="numbers">
                            <a href="#">
                                <img src="./image/approved.jpeg">
                            </a>
                        </div>
                        <div class="cardName">Approved </div>
                    </div>


                </div>


                <div class="card">
                    <div>
                        <div class="numbers">
                            <a href="#">
                                <img src="./image/draft3.png">
                            </a>
                        </div>

                        <div class="cardName">Draft</div>
                    </div>


                </div>


                <div class="card">
                    <div>
                        <div class="numbers">
                            <a href="#">
                                <img src="./image/pending3.jpeg">
                            </a>
                        </div>
                        <div class="cardName">Pending</div>
                    </div>


                </div>



            </div>
        </div>

        <!--*********script************-->
        <script src="./js/main.js"></script>

        <!--import from google to add icons-->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>