<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./feedback.css">
    <title>feedback</title>
</head>

<body>
    <form  action="feedback-insert.php" method="POST">
        <div class="feedback-container">
            <h1>Give us your valuable feedback</h1>
            <p>Your feedback is very importent to us</p><br>
            <div class="rate-box">
                <input type="radio" name="rating" class="rate1" value="good">Good
                <input type="radio" name="rating" class="rate2" value="very good">Very Good
                <input type="radio" name="rating" class="rate3" value="Bad">Bad
            </div><br>
            <p class="question">What you want to say</p>
            <textarea id="textarea" cols="20" rows="5" name="feedbackcomment" ></textarea>
            <p class="question">Are you want to share this publickly ?</p>
            


            <div class="info-field">
                <div class="name">
                    <label>
                        <input type="text" placeholder=" " name="username" id="username">
                        <span>User Name</span>
                    </label>
                </div>
                <div class="email">
                    <label>
                        <input type="email" placeholder=" " name="email" id="email">
                        <span>Email(will not be published)</span>
                    </label>
                </div>

            </div>

            <div class="accept">
                <input type="checkbox" id="accept">
                <label>I accept the <a href="#">terms and conditions</a></label>
            </div>
            <div class="center">
                <button type="submit" class="btn button" id="submit" name="submit">Send Feedback</button>

            </div>
        </div>
    </form>

        

</body>

</html>