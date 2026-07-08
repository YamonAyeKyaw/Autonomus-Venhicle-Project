<?php 
	include('Connect.php');
	include 'header.php';
	if (isset($_REQUEST['PID'])) 
	{
		$VehicleID=$_REQUEST['PID'];
		$query="SELECT * FROM Vehicle 
				WHERE VehicleID='$VehicleID'";
		$result=mysqli_query($connection,$query);
		$arr=mysqli_fetch_array($result);
	}
	else
	{
		echo "<script>alert('Please Choose a Vehicle');</script>";
		echo "<script>window.location='VehicleDisplay.php';</script>";
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
	

 		<input type="hidden" name="txtVehicleID" value="<?php echo $arr['VehicleID'] ?>">
 	<table>
 		<tr>
 			<td>
 				<img src="<?php echo $arr['VehicleImage']; ?>" width="350px">
 			</td>
 			<td>
 				<h1><?php echo $arr['VehicleName']; ?></h1>
 				Type: <b><?php echo $arr['Type']; ?></b><br>
 				Colour: <b><?php echo $arr['Colour']; ?></b><br>				
 				Description: <b><?php echo $arr['Description']; ?></b><br>
 				<h2><?php echo $arr['UnitPrice']; ?> Dollar</h2><br>
 			<a href="index.php">Back</a>
 			<style type="text/css">
									a:hover
									{
										color: red;
									}
									a
									{
										color: red;
									}

								</style>
 				<br>
 			</td>
 		</tr>
 	</table>
 	
 </body>
 </html>
 <?php 
include 'footer.php';
  ?>