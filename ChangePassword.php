<?php 	
session_start();
include('Connect.php');
include ('Header.php');
if(isset($_SESSION['cid']))
{
	$cid=$_SESSION['cid'];
	$select="SELECT * FROM customer where Customer_ID='$cid'";
	$query=mysqli_query($connection,$select);
	$count=mysqli_num_rows($query);
	if($count>0)
	{
		$data=mysqli_fetch_array($query);
		$username=$data['Customer_Name'];
		$password=$data['Password'];
	}
}
else
{
	echo "<script>alert('login again')</script>";
	echo "<script>window.location='LoginForm.php'</script>";
}



if(isset($_POST['btnupdate']))
{
	$cusid=$_POST['cusid'];
	$username=$_POST['txtusername'];
	$password=$_POST['txtpassword'];

		$update="UPDATE customer SET Customer_Name='$username',Password='$password'
		where Customer_ID='$cusid'";
		$query=mysqli_query($connection,$update);
	
		if($query)
		{
			echo "<script>alert('Customer Login Update Successful')</script>";
			echo "<script>window.location='LoginForm.php'</script>";
		}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<form action="ChangePassword.php" method="POST">	
			<input type="hidden" name="cusid" value="<?php echo $cid ?>">
				<table align="center" id="t1">	
						<tr>
						<td colspan="2" align="center"><h2>Change Password</h2></td>		
						</tr>

						<tr>	
								<td>	User Name </td>
								<td>	
								<input type="text" name="txtusername" required value="<?php echo $username ?>">
								</td>
						</tr>

						<tr>	
								<td>	Password </td>
								<td>	
								<input type="password" name="txtpassword" required value="<?php echo $password ?>">
								</td>
						</tr>

						<tr>	
								<td>	</td>
								<td>	
								<input type="submit" name="btnupdate" value="Update">
								</td>
						</tr>
				</table>
		</form>
</body>
</html>

<?php include'footer.php'; ?>