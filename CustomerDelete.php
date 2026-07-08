<?php 
include('Connect.php');
if(isset($_REQUEST['Customer_ID']))
{
	$CustomerID=$_REQUEST['Customer_ID'];
	$delete="DELETE FROM customer where Customer_ID='$CustomerID'";
	$query=mysqli_query($connection,$delete);
	if($query)
	{
		echo "<script>window.alert('Customer Delete Successful')</script>";
		echo "<script>window.location='CustomerRegister.php'</script>";
	}
}

 ?>