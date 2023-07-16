<?php 
	session_start();
	if(isset($_SESSION['admin']))
	{
?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pharmacy List</title>
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/style.css">
	<style type="text/css">
		body{

		}
        table, th, td, tr{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
        

    </style>
</head>
<body>
	<?php require "include/adminhead.php"; ?>
	<?php  
	require_once '../controller/adminInfo.php';

	$pharmacies = fetchPharmacy();

	?>

	<section id="user">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="user">
						<table width="100%">
							<tr>
								<td colspan="11"><h1 align="center">Pharmacy List</h1></td>
							</tr>
					        <tr>  
					            <th>Pharmacy_Id</th> 
					            <th>Pharmacy Name</th> 
					            <th>Location</th> 
					            <th>ContactNo</th>            
					            <th>Edit</th>          
					            <th>Delete</th>          
					        </tr>  
					        <?php foreach ($pharmacies as $i => $pharmacy): ?>
								<tr>
									<td><?php echo $pharmacy['Pharmacy_Id'] ?></td>
									<td><?php echo $pharmacy['Pharmacy_Name'] ?></td>
									<td><?php echo $pharmacy['Location'] ?></td>
									<td><?php echo $pharmacy['ContactNo'] ?></td>
									<td><a href="editPharmacy.php?id=<?php echo $pharmacy['Pharmacy_Id'] ?>">Edit</a></td>
									<td><a href="../controller/deletePharmacy.php?id=<?php echo $pharmacy['Pharmacy_Id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
								</tr>
							<?php endforeach; ?>
							<tr>
								<td colspan="11" align="center" style="padding: 20px;"><a href="addPharmacy.php" style="font-size: 30px; padding: 5px; background-color: #99cc33;">Add Pharmacy</a></td>
							</tr>
					    </table> 
					    
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<br><br>
	<?php include "include/footer.php"; ?>
	
	
</body>
</html>




<?php
	}
	else{
		echo "Invalid request";
	}
?>