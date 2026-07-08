<?php 
	include('Connect.php');
	include('AdminHeader.php');
	if (isset($_POST['btnRegister'])) {
		$VehicleName=$_POST['txtVehicleName'];
		$CompanyID=$_POST['cboCompany'];
		$Type=$_POST['txtType'];
		$Colour=$_POST['txtColour'];
		$Description=$_POST['txtDescription'];
		$UnitPrice=$_POST['txtUnitPrice'];
		$Quantity=$_POST['txtQuantity'];
		$VehicleImage=$_FILES['txtVehicleImage']['name'];
		$folder="../images";
		if($VehicleImage) 
		{
			$filename=$folder.$VehicleImage;
			$copied=copy($_FILES['txtVehicleImage']['tmp_name'], $filename);
			if (!$copied) 
			{
				exit("Problem Occured. Cannot upload an image.");
			}
			else{
				$insert="INSERT INTO Vehicle(VehicleName,CompanyID,Type,Colour,Description,UnitPrice,Quantity,VehicleImage)
				         VALUES('$VehicleName','$CompanyID','$Type','$Colour','$Description','$UnitPrice','$Quantity','$filename')";
				$ret=mysqli_query($connection,$insert);
				if ($ret) {
					echo "<script>alert('Autonomous Vehicle Register Successful');</script>";
				}
				else{
					echo "<script>alert('Vehicle cannot be Registered');</script>";
				}
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
			<style>
	.myTable {
		
		text-align: center;
		background-color: #cfe8be;
		border-collapse: collapse;
	}
		.myTable th {
		background-color: #cfe8be;
		color: black;
	}
	.myTable td,
	.myTable th {
		padding: 10px;
		border: 1px solid #cfe8be;
	}
</style>
		<style>
	.Table {
		
		text-align: center;
		background-color: #ebcaca;
		border-collapse: collapse;
	}
		.Table th {
		background-color: #ebcaca;
		color: #ebcaca;
	}
	.Table td,
	.Table th {
		padding: 10px;
		border: 1px solid white;
	}
</style>
<table class="Table" width="100%"><tr><th>.</th></tr></table>
<br><br>

		<style>
	.tt {
		
		text-align: center;
		background-color: #cad0eb;
		border-collapse: collapse;
	}
		.tt th {
		background-color: #cad0eb;
		color: black;
	}
	
	.tt th {
		padding: 10px;
		border: 2px solid #cad0eb;
	}
	input[type=submit]
	{
		width: 100px;
  background-color: #cad0eb;
  color: white;
  padding: 10px 15px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-weight: bold;
  transition-duration:0.3s;
	}
	input [type=submit].hover
	{
		background-color: black;
		color:white;
	}
</style>
 <div  align="center" class="tt">
          <th><h1><u>Vehicle Registration</u></h1><th>
        </div>
        <br>
	<form action="VehicleRegister.php" method="POST" enctype="multipart/form-data">
		<table align="center" class="myTable" width="70%" >

			<tr>
				<td>Vehicle Name</td>
				<td><input type="text" name="txtVehicleName" placeholder="Enter vehicle name" required></td>
			</tr>
			<tr>
<td>Company</td>
<td>
<select name="cboCompany">
<option> Please select </option>
<?php
$Company="SELECT * FROM Company ORDER BY CompanyName";
$result=mysqli_query($connection,$Company);
$count=mysqli_num_rows($result);
for ($i=0; $i < $count; $i++) {
$arr=mysqli_fetch_array($result);
echo "<option value='".$arr['CompanyID']."'>".$arr['CompanyName']."</option>";
}
?>
</select>
</td>
</tr>
					<tr>
				<td>Type</td>
				<td><input type="txtType" name="txtType"
					 placeholder="Enter vehicle type" required></textarea></td>
			</tr>
			<tr>
				<td>Colour</td>
				<td><input type="txtColour" name="txtColour" required></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><textarea name="txtDescription" placeholder="Enter Description" required></textarea></td>
			</tr>		
			<tr>
				<td>UnitPrice</td>
				<td><input type="txtUnitPrice" name="txtUnitPrice" required></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input type="number" name="txtQuantity" required></td>
			</tr>

			<tr>
				<td>Vehicle Image</td>
				<td><input type="file" name="txtVehicleImage" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnRegister" value="Register"></td>
			</tr>
		</table>
	</form>
	<div align="center"><font color="maroon"><br>To view current vehicle list,
         <a href="VehicleList.php" class="clickhere"><b><u>Click here</u></b> </a>.
         <style type="text/css">
         							a[class=clickhere]
									{
										color: red;
									}
									a[class=clickhere]:hover
									{
										color: black;
									}
									

								</style>
     	</font></div>
	<br><br>
</body>
</html>
<?php
include ('footer.php');
?>