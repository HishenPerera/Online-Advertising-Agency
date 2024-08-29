<?php

    session_start();
    include 'connection.php';

    



    $feedback_ID=$_GET['feedback_ID'];
    


     $select="SELECT  * FROM feedback WHERE feedback_ID='$feedback_ID'";
     $data=mysqli_query($con,$select);
     $row=mysqli_fetch_array($data);

    $_SESSION['feedback_ID'] = $feedback_ID;


    

    


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./feedback.css">
    <title>feedback</title>
</head>

<body>
    <form  action="update-insert.php" method="POST">
        <div class="feedback-container">
            <h1>Give us your valuable feedback</h1>
            <p>Your feedback is very importent to us</p><br>
            <div class="rate-box">
                <input type="radio" name="rating" class="rate1" value="good" <?php if($row["rate"] == "good") echo "checked"; ?>>Good
                <input type="radio" name="rating" class="rate2" value="very good" <?php if($row["rate"] == "very good") echo "checked"; ?>>Very Good
                <input type="radio" name="rating" class="rate3" value="Bad" <?php if($row["rate"] == "Bad") echo "checked"; ?>>Bad
            </div><br>
            <p class="question">What you want to say</p>
            <textarea id="textarea" cols="20" rows="5" name="feedbackcomment"><?php echo $row["feedback_comment"]; ?></textarea>
            <p class="question">Are you want to share this publicly?</p>

            


            <div class="info-field">
                <div class="name">
                    <label>
                        <input type="text" placeholder=" " name="username" id="username" value="<?php echo $row["user_name"]?>" >
                        <span>User Name</span>
                    </label>
                </div>
                <div class="email">
                    <label>
                        <input type="email" placeholder=" " name="email" id="email" value="<?php echo $row["email"]?>"  >
                        <span>Email(will not be published)</span>
                    </label>
                </div>

            </div>

            <div class="accept">
                <input type="checkbox" id="accept">
                <label>I accept the <a href="#">terms and conditions</a></label>
            </div>
            <div class="center">
                <button type="submit" class="btn button" id="submit" name="submit">Update Feedback</button>

            </div>
        </div>
    </form>

        

</body>

</html>