<?php 
include('Connect.php');
if(isset($_REQUEST['VehicleID']))
{
	$VehicleID=$_REQUEST['VehicleID'];
	$delete="DELETE FROM vehicle where VehicleID='$VehicleID'";
	$query=mysqli_query($connection,$delete);
	if($query)
	{
		echo "<script>window.alert('Vehicle Delete Successful')</script>";
		echo "<script>window.location='VehicleRegister.php'</script>";
	}
}

 ?>