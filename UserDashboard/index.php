<?php

    include 'connection.php';

    if(isset($_POST['submit'])) {
    $cardNumber = $_POST['cardNumber'];
    $cardHolderName = $_POST['cardHolderName'];
    $expirationMonth = $_POST['expirationMonth'];
    $expirationYear	 = $_POST['expirationYear'];
    $cvv = $_POST['cvv'];

    $query = "insert into carddetails (cardNumber,cardHolderName,expirationMonth,expirationYear) 
    
    values('$cardNumber','  $cardHolderName',' $expirationMonth',' $expirationYear',' $cvv')
    
    ";

    $data = mysqli_query ($con,$query);

    if($data){
        echo "dat saved";
    }else{
        echo"data not saved";
    }

    }

?>