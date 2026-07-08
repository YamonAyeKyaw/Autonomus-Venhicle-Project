<?php 
	include('Connect.php');
	include('AdminHeader.php');
	if (isset($_POST['btnrecord'])) {
		$titlename=$_POST['txttitlename'];
		
		
				$insert="INSERT INTO FAQTitle(titlename)
				         VALUES('$titlename')";
				$ret=mysqli_query($connection,$insert);
				if ($ret) {
					echo "<script>alert('FAQ Title Register Successful');</script>";
				}
				else{
					echo "<script>alert('FAQTitle cannot be Registered');</script>";
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
		background-color: #adb5db;
		border-collapse: collapse;
	}
		.myTable th {
		background-color: #adb5db;
		color: black;
	}
	.myTable td,
	.myTable th {
		padding: 10px;
		border: 1px solid #adb5db;
	}
	td
	{
		color: black;
	}
</style>
		<style>
	.Table {
		
		text-align: center;
		background-color: #acd3e6;
		border-collapse: collapse;
	}
		.Table th {
		background-color: #acd3e6;
		color: #acd3e6;
	}
	.Table td,
	.Table th {
		padding: 10px;
		border: 1px solid #acd3e6;
	}
</style>
<table class="Table" width="100%"><tr><th>.</th></tr></table>
<br><br>

		<style>
	.tt {
		
		text-align: center;
		background-color: #ace6e0;
		border-collapse: collapse;
	}
		.tt th {
		background-color: #ace6e0;
		color: black;
	}
	
	.tt th {
		padding: 10px;
		border: 2px solid #ace6e0;
	}
	input[type=submit]
	{
	width: 100px;
  		background-color:black ;
  		color: white;
  		
 		 cursor: pointer;
 		}
</style>
 <div  align="center" class="tt">
          <th><h1><u>FAQTitle Entry</u></h1><th>
        </div>
        <br>
	<form action="FAQTitle.php" method="POST">
		<table align="center" class="myTable" width="70%" >

			<tr>
				<td>Title Name</td>
				<td><input type="text" name="txttitlename" placeholder="Enter Title Name" required></td>
			</tr>
		
			<tr>
				<td></td>
				<td><input type="submit" name="btnrecord" value="Record"></td>
			</tr>
			<tr>
				<td></td>
				<td><div>If you want to make a FAQ,
 <a href="FAQ.php"><b><u>Click Here</u></b></a></div>
 <div>For FAQ Display,<a href="FAQDisplay.php"><b><u>Click Here</u></b></a></div></td>
			</tr>
		</table>
	</form>
	
	<?php 
include('Footer.php');
	 ?>
</body>
</html>
