<?php 
session_start();	
include('connect.php');
include('Adminheader.php');
?>

<?php 
		if (isset($_POST['btnlogin'])) {
		$AdminName=$_POST['txtAdminName'];
		$Password=$_POST['txtPassword'];
		$query="SELECT * FROM Admin 
				WHERE Admin_Name='$AdminName'
				AND Password='$Password'";
		$result=mysqli_query($connection,$query);
		$count=mysqli_num_rows($result);
		if ($count>0) {
			$arr=mysqli_fetch_array($result);
			$_SESSION['Admin_ID']=$arr['Admin_ID'];
			$_SESSION['Admin_Name']=$arr['Admin_Name'];
			echo "<script>alert('Admin Login Successful');</script>";
			echo "<script>window.location='VehicleRegister.php';</script>";
		}
		else{
			echo "<script>alert('Invalid Login');</script>";
			echo mysqli_error($connection);
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
</title>
</head>
<body>
		<style>
	.myTable 
	{
		
		text-align: center;
		background-color: lemonchiffon;
		border-collapse: collapse;
	}
		.myTable th {
		background-color: black;
		color: black;
	}
	.myTable td,
	.myTable th {
		padding: 10px;
		border: 1px solid black;
	}
	input[name=btnlogin]
	{
		width: 100px;
  		background-color:black ;
  		color: white;
  		
 		 cursor: pointer;
	}
	input[type=submit]:hover, input[type=reset]:hover
 		{
 		 background-color: #2a3036;
		}
</style>
<table class="myTable" width="100%"><tr><th>.</th></tr></table>
	<form action="AdminLogin.php" method="POST">
<div class="Request">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="titlepage3">
          <h2>Admin Log-in</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <form>
          <input class="form-control" placeholder="Enter your name" name="txtAdminName" type="Name" required>
          <br>
          <input class="form-control" name="txtPassword" placeholder="Enter Password" type="Password" required>
          <br>
          <input  name="btnlogin" value="Login" type="submit" onclick="location.href=''">
        </form>
          <div><br><br>You don't have an account then 
         <a href="AdminForm.php"><b><u>Click here</u></b> </a> to register.
     	</div>
      </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
        <div class="Request-box">
          <figure><a href="AdminForm.php"><img src="images/requestbox.jpg" alt="img"/></a>
          </figure>
          <div class="Register">
          	<center><p>Log in here, if you have an account</p></center>
          </div>
        </div>
      </div>
     </div>
  </div>
</div>

<?php 
include ('Footer.php');
 ?>