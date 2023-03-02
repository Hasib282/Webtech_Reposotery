<?php 
	session_start();
	if(isset($_SESSION['username']))
	{
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View Profile</title>
</head>
<body>
	<table width="70%" align="center" border="1px solid black" style="border-collapse: collapse;">	
		<!-- header part html start -->
		<?php require "design/header.php"; ?>






		<!-- body part html start -->
		<tr>
			<!-- Menu part html start -->
			<?php require "design/menu.php"; ?>



			<!-- profile part html start -->
			<td>
				<!-- get data from json file -->
				<?php require "design/getdata.php"; ?>



				<form action="">
					<fieldset style="width:550px; height: 400px; margin: 0px auto;">
			            <legend><h1>Profile</h1></legend>
						<table>
							<tr>
								<td>
				            		<label for="">Name  &emsp;&emsp;&ensp;&nbsp;: <?php echo $name ?></label><br><hr>
				            		<label for="">Email  &emsp;&emsp;&ensp;   : <?php echo $email ?></label><br><hr>
				            		<label for="">Username  &nbsp;&ensp;    : <?php echo $username ?></label><br><hr>
				           			<label for="">Password  &emsp;    : <?php echo $pass ?></label><br><hr>
				           			<label for="">Gender   &emsp;&emsp;     : <?php echo $gender ?></label><br><hr>
				           			<label for="">Date of Birth : <?php echo $dob ?></label><br>  		
								</td>
								<td align="center">
									<img src="images/11.jpeg" alt="" height="200px" width="200px"><br>
									<a href="profilechange.php">Change</a>
								</td>

							</tr>
							<tr>
								<td colspan="2">
									<hr>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<a href="editprofile.php">Edit Profile</a>
								</td>
							</tr>
						</table>
					</fieldset>
					<br>
				</form>
			</td>
			<!-- profile part html end -->
		</tr>
		<!-- body part html end -->






		<!-- footer part html start -->
		<?php include "design/footer.php"; ?>

	</table>
</body>
</html>

<?php
	}
	else{
		echo "Invalid request";
	}
?>