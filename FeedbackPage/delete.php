<?php
    include 'connection.php';

    $feedback_ID=$_GET['feedback_ID'];

    $query="DELETE FROM feedback WHERE feedback_ID='$feedback_ID'";
    $data=mysqli_query($con,$query);

    if($data)
    {
        header("Location:viewpage.php");
    }
    else
    {
        echo "Delete unSuccessfully"; 
    }
?>