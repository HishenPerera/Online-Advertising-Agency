<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./manage.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Account</title>


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
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline" active></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="cog"></ion-icon>
                        </span>
                        <span class="title">Manage account</span>
                    </a>
                </li>


                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="list"></ion-icon>
                        </span>
                        <span class="title">My ads</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="card"></ion-icon>
                        </span>
                        <span class="title">Payments</span>
                    </a>
                </li>


                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out"></ion-icon>
                        </span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>



        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu"></ion-icon>
                </div>

                <!--********creating form*******-->
                <div class="container-form">
                    <form action="#" class="form">
                        <header class="header-form">
                            <h3>Personal Info</h3>
                        </header><hr>


                        <!--user img part-->
                        <div class="user-profile">
                            <input type="file" id="user-image" value="Profile">
                            <h2 id="user-name" itemid="userID"></h2>


                            <label class="label">
                                First Name :
                            </label>
                            <input type="text" class="text" placeholder="Enter your first name"><br>

                            <label class="label">
                                Last Name :
                            </label>
                            <input type="text" class="text" placeholder="Enter your last name"><br>

                            <label class="label">
                                Email Address :
                            </label>
                            <input type="email" class="text" placeholder="example@gmail.com"><br>

                          <select  class="gender">
                            <option value="male" selected>Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                          </select><br><br>

                          <label class="label">
                           Contact-Number :
                        </label>
                        <input type="tel" class="text" placeholder="+94-11111111"><br>

                         <button type="submit" class="Update">Update</button><br>


                          

                    </form>
                </div>



                <script src="./js/manage.js"></script>


                <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>