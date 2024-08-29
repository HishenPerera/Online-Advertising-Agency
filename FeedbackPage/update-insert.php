<?php

    include("connection.php");
    

    session_start();

    $feedback_ID= $_SESSION['feedback_ID'];


    

                


    
    

        

    if(isset($_POST['submit']))
    {
            
            $rating=$_POST['rating'];
            $feedbackcomment=$_POST['feedbackcomment'];
            //$userid=$_POST['userid'];
            $username=$_POST['username'];
            $email=$_POST['email'];

            
            

           





            $query_update = "UPDATE feedback SET 
                    rate = '$rating',
                    feedback_comment = '$feedbackcomment',
                    user_name = '$username',
                    email = '$email'
                    WHERE feedback_ID = '$feedback_ID'";



                    $result_update = mysqli_query($con, $query_update);
        
            
        
                    if ($result_update) {
                        header("Location:viewpage.php");
                    } else {
                        echo "Error";
                    }
        


            
    }
?>