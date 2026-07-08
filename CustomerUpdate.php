<?php
session_start();
include('Connect.php'); 
include('header.php');

if(isset($_SESSION['cid']))
{
	$CustomerID=$_SESSION['cid'];
	$select="SELECT * FROM Customer where Customer_ID='$CustomerID'";
	$query=mysqli_query($connection,$select);
	$data=mysqli_fetch_array($query);
	$CustomerID=$data['Customer_ID'];
	$CustomerName=$data['Customer_Name'];
	$Address=$data['Address'];
	$PhoneNumber=$data['PhoneNumber'];
	$Email=$data['Email'];
	$Password=$data['Password'];
	$Gender=$data['Gender'];
	$DateOfBirth=$data['DateofBirth'];
	$PostalAddress=$data['PostalAddress'];
  	$PostalCode=$data['PostalCode'];
	$Image=$data['Images'];

}



if(isset($_POST['btnUpdate'])) 
{
	$txtCustomerID=$_POST['txtCustomerID'];
	$txtCustomerName=$_POST['txtCustomerName'];
	$txtAddress=$_POST['txtAddress'];
	$txtPhoneNumber=$_POST['txtPhoneNumber'];
	$txtEmail=$_POST['txtEmail'];
	$txtPassword=$_POST['txtPassword'];	
	$txtDateOfBirth=$_POST['txtDateOfBirth'];
	$txtGender=$_POST['txtgender'];
	$txtpostaladd=$_POST['txtpostaladd'];
  	$txtpostalcode=$_POST['txtpostalcode'];

	
	
	$check="Update customer set Customer_Name='$txtCustomerName', Address='$txtAddress', PhoneNumber='$txtPhoneNumber', Email='$txtEmail', Password='$txtPassword', DateOfBirth='$txtDateOfBirth', Gender='$txtGender' , PostalAddress='$txtpostaladd',PostalCode='$txtpostalcode' where Customer_ID='$txtCustomerID'";
	$ret=mysqli_query($connection,$check);
	
	if($ret)
	{
		echo"
		<script>
			alert('Customer Update Successful');
			location.assign('LoginForm.php'); 
		</script>";
	}
	
}

?>
 		<style>
	.update {
		
		text-align: center;
		background-color: #6f8c5e;
		border-collapse: collapse;
	}
		.update th {
		background-color: gainsboro;
		color: gainsboro;
	}
	.update td,
	.update th {
		padding: 10px;
		border: 0px solid lavender;
	}
	td
	{
		color: black;
	}
	input[type=submit]
	{
		 width: 100px;
  background-color: #89ab74;
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
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
		
<body>
		<form action="CustomerUpdate.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="txtCustomerID" value="<?php echo $CustomerID ?>">
		<table class="update" align="center" width="100%">
			<tr>
				<td align="right" width="38%"><b><u>User Name</u></b></td>
				<td align="center"><input type="text" name="txtCustomerName" value="<?php echo $CustomerName ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Password</u></b></td>
				<td align="center"><input type="password" name="txtPassword" value="<?php echo $Password ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Address</u></b></td>
				<td align="center"><textarea name="txtAddress" required><?php echo $Address ?></textarea></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>DateOfBirth</u></b></td>
				<td align="center"><input type="date" name="txtDateOfBirth" value="<?php echo $DateOfBirth ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Email</u></b></td>
				<td align="center"><input type="email" name="txtEmail" value="<?php echo $Email ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Phone Number</u></b></td>
				<td align="center"><input type="text" name="txtPhoneNumber" value="<?php echo $PhoneNumber ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Gender</u></b></td>
				<td align="center"><input type="text" name="txtgender"  value="<?php echo $Gender ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Postal Address</u></b></td>
				<td align="center"><input type="text" name="txtpostaladd" value="<?php echo $PostalAddress ?>" required></td>
			</tr>
			<tr>
				<td align="right" width="38%"><b><u>Postal Code</u></b></td>
				<td align="center"><input type="text" name="txtpostalcode" value="<?php echo $PostalCode ?>" required></td>
			</tr>
			<tr>
				<td></td>
				<td align="center"><input type="submit" name="btnUpdate" value="UPDATE">  <input type="submit" name="btnLogOut" value="LOGOUT"></td>
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
