<?php
    include 'connection.php';
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Admin Dashboard
        </title>

        
        <link rel="stylesheet" type="text/css" href="view.css">
        
    </head>
    <body>

    <?php
    include '../FeedbackPage/includes/header.php';
    ?>
    <!-- Main Content -->
    <div class="main-content">

        <?php
        include '../FeedbackPage/includes/sidebar.php';
        ?>
    
    <!-- Main Content -->

        <div class="page-content">
        <div class="mOffers-title">
                <h2>Feedback Information</h2>
            </div>
        <div class="header">
            
            <div class="offers-table-container">

            <table class="job-info" border="1">

              <tr>
                  <th>FeedBack ID</th>
                  <th>Rate</th>
                  <th>Comment</th>
                  <th>User Name</th>
                  <th>email</th>
                  <th colspan="2">Action</th>
              </tr>
  
  
  
  
              <?php
  
  
                  $query = "SELECT * FROM feedback";
  
                  $data=mysqli_query($con,$query);
                  $result=mysqli_num_rows($data);
  
                  while($row=mysqli_fetch_array($data)){
                      ?>
                      
                      <tr>
                          <td><?php echo $row["feedback_ID"]?></td>
                          <td><?php echo $row["rate"]?></td>
                          <td><?php echo $row["feedback_comment"]?></td>
                          <td><?php echo $row["user_name"]?></td>
                          <td><?php echo $row["email"]?></td>
                          <td><button class="update-btn"><a href="update.php?feedback_ID=<?php echo $row["feedback_ID"];?>">Update</a></td>
                          <td>
  
                              <button class="delete-btn">
                                  <a href="delete.php?feedback_ID=<?php echo $row["feedback_ID"];?>">Delete</a>
                              </button>
  
                          </td>
  
                      </tr>
                  
                  <?php
                  }
                  ?>
            </div>
           
  
          </div>
        </div>
  
    </body>
</html>