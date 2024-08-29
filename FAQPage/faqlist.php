<?php
include 'config.php';
if(isset($_POST['submit'])){
    $Question=$_POST['Question'];
    

    $sql="INSERT INTO question (Question) values('$Question')";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Data inserted successfully!";
    }
    else{
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang = "en" dir = "ltr">
	<head>
		<meta charset = "utf-8">
		<meta name = "viewpoint" content = "width=device-width, initial-scale=1.0">
		<title>Staff list</title>
		<style>
            .table {
            max-width: 800px;
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
            padding: 20px;
            }

            .table th {
            padding: 10px;
            text-align: left;
            background-color: #333;
            color: white;
            }

            .table td {
            padding: 10px;
            }
            
            .table tr:nth-child(even) {
            background-color: #f2f2f2;
            }
            
            .button {
            display: inline-block;
            padding: 8px 16px;
            background-color: #4caf50;
            color: white;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            }

            .button:hover {
            background-color: #45a049;
            }

        </style>
	</head>

    <body>
    <div class="container">
        <table class="table" border="1">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Question</th>
                    <th scope="col">Operations</th>
                    </tr>
            </thead>
            <tbody>
            <?php
            $sql="SELECT * FROM `question` ORDER BY ID DESC LIMIT 1";    
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $ID=$row['ID'];
                    $Question=$row['Question'];
                    
                    echo '<tr>
                    <td scope="row">'.$ID.'</td>
                    <td scope="row">'.$Question.'</td>
                    <td>
                        <button><a href="fupdate.php? fupdateid='.$ID.'">Update</a></button>
                        <button><a href="fdelete.php? fdeleteid='.$ID.'">Delete</a></button>
                    </td>
                </tr>';
                }
            }

            ?>
            
            
            </tbody>
        </table>
    </div>
    </body>
</html>