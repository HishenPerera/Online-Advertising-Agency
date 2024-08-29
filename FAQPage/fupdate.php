<?php
include 'config.php';


$ID=isset($_GET['fupdateid']) ? $_GET['fupdateid'] : '';

if($ID !== ''){
if(isset($_POST['submit'])){

	//Get updated info. from form
    $Question=$_POST['Question'];
  

	//Upadte the exsisting record in database
	$sql = "UPDATE `question` SET Question='$Question' WHERE ID=$ID";
    $result = mysqli_query($con, $sql);

    if($result){
		header('location:faqlist.php');
		exit();
    }
    else{
        die(mysqli_error($con));
    }
}
}
else{
	echo "Not successful!";
}
?>

<!DOCTYPE html>
<html lang = "en" dir = "ltr">
	<head>
		<meta charset = "utf-8">
		<meta name = "viewpoint" content = "width=device-width, initial-scale=1.0">
		<title>FAQ Update</title>
    <style>

      body{
        background-color: #BDDDEC;
      }
        
      .faq {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #81AFC4;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      
      .faq-name {
        text-align: center;
      }

      
      .faq-header {
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
        flex-wrap:nowrap;
      }

      
      textarea {
        width: 100%;
        height: 150px;
        padding: 10px;
        box-sizing: border-box;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        resize: none;
      }

      
      .Qbtn button {
        padding: 10px 20px;
        background-color: #0B4661;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
      }

      .Qbtn button:hover {
        background-color: #083246;
      }

    </style>
		</head>
<body>
<?php if ($ID !== ''): ?>
<form method="POST">
  <div class="faq">
    <div class="faq-name">
        <h1 class="faq-header">Have questions?</h1>
        <textarea name="Question" placeholder="Enter your question here..."></textarea>
        <div class="Qbtn">
        <button href="faqlist.php" value="submit" name="submit" value="submit">Update</button>
        </div>
    </div>
  </form>
  <?php endif; ?>
</body>

</html>