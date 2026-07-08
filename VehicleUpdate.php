<?php
include('Connect.php'); 
include('adminheader.php');

if(isset($_REQUEST['VehicleID']))
{
	$VehicleID=$_REQUEST['VehicleID'];
	$select="SELECT * FROM vehicle where VehicleID='$VehicleID'";
	$query=mysqli_query($connection,$select);
	$data=mysqli_fetch_array($query);
	$VehicleID=$data['VehicleID'];
	$VehicleName=$data['VehicleName'];
	$Type=$data['Type'];
	$Colour=$data['Colour'];
	$Description=$data['Description'];
	$UnitPrice=$data['UnitPrice'];
	$Quantity=$data['Quantity'];
	$VehicleImage=$data['VehicleImage'];
}



if(isset($_POST['btnUpdate'])) 
{
	$txtVehicleID=$_POST['txtVehicleID'];
	$txtVehicleName=$_POST['txtVehicleName'];
	$txtType=$_POST['txtType'];
	$txtColour=$_POST['txtColour'];
	$txtDescription=$_POST['txtDescription'];	
	$txtPrice=$_POST['txtPrice'];
	$txtqty=$_POST['txtqty'];

	
	$check="Update vehicle set VehicleName='$txtVehicleName', Type='$txtType', Colour='$txtColour', Description='$txtDescription', UnitPrice='$txtPrice', Quantity='$txtqty' where VehicleID='$txtVehicleID'";
	$ret=mysqli_query($connection,$check);
	
	if($ret)
	{
		echo"
		<script>
			alert('VehicleID Update Successful');
			location.assign('VehicleList.php'); 
		</script>";
	}
	
}

?>
 		<style>
	.update {
		
		text-align: center;
		background-color: lavender;
		border-collapse: collapse;
	}
		.update th {
		background-color: #cad0eb;
		color: black;
	}
	.update td,
	.update th {
		padding: 10px;
		border: 1px solid lavender;
	}
	input[type=submit],input[type=reset] 
	{
		width: 100px;
  background-color: #808ed1;
  color: white;
  padding: 10px 15px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-weight: bold;
  transition-duration:0.3s;
	}
</style>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
		
<body>
		<form action="VehicleUpdate.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="txtVehicleID" value="<?php echo $VehicleID ?>">
		<table class="update" align="center" width="100%">
			<tr>
				<td align="right" width="38%"><b><u>Vehicle Name</u></b></td>
				<td align="center"><input type="text" name="txtVehicleName" value="<?php echo $VehicleName ?>" required></td>
			</tr>


			<tr>
				<td align="right" width="38%"><b><u>Type</u></b></td>
				<td align="center"><input type="text" name="txtType" value="<?php echo $Type ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Colour</u></b></td>
				<td align="center"><input type="text" name="txtColour" value="<?php echo $Colour ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Description</u></b></td>
				<td align="center"><textarea name="txtDescription" required><?php echo $Description ?></textarea></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>UnitPrice</u></b></td>
				<td align="center"><input type="text" name="txtPrice" value="<?php echo $UnitPrice ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Quantity</u></b></td>
				<td align="center"><input type="number" name="txtqty" value="<?php echo $Quantity ?>" required></td>
			</tr>
			
			<tr>
				<td></td>
				<td align="center"><input type="submit" name="btnUpdate" value="UPDATE">  <input type="reset" value="Cancel"></td>
				<td width="30%"><td>
			<br><br>
			
				
</tr>

		</table>
	</form>
</body>
</html>
<?php 
	include('Footer.php');
 ?>
