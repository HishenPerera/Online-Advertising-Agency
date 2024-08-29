<?php

    include("connection.php");
    

    //session created
    session_start();


    $userid = $_SESSION['userid'];
    $userid=$_SESSION['userid'];

    

                


        

    if(isset($_POST['submit']))
    {
            
            $rating=$_POST['rating'];
            $feedbackcomment=$_POST['feedbackcomment'];
            $userid=$_POST['userid'];
            $username=$_POST['username'];
            $email=$_POST['email'];

            
            

           





            $query_application = "INSERT INTO feedback (rate, feedback_comment,user_name,email)
            VALUES ('$rating', '$feedbackcomment', '$username', '$email')";
            $result_application = mysqli_query($con, $query_application);
        
            
        
            if ($result_application) {

                //echo"Ok";

               //admin page
                header("Location: ..//..//AdminPage/pages/offers.php");
            } else {
                echo "Error";
            }
        


            
    }
?>