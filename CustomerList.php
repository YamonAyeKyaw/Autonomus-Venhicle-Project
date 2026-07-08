<?php 
include('connect.php');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <style>
 	table
 	{
 		
 	}
 </style>
 <body>
 
<table id="TableID" class="display" width="90%">
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Phone Number</th>
			<th>Address</th>
			<th>Gender</th>
			<th>Date of Birth</th>
			<th>Postal Address</th>
			<th>Postal Code</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$query="SELECT * from Customer";
		$result=mysqli_query($connection,$query);
		$count=mysqli_num_rows($result);
		for ($i=0;$i<$count;$i++)
		{
			$rows=mysqli_fetch_array($result);
			$Customer_ID=$rows['Customer_ID'];
			$txtC_Name=$rows['Customer_Name'];
			$Email=$rows['Email'];
			$Password=$rows['Password'];
			$txtphno=$rows['PhoneNumber'];
			$txtaddress=$rows['Address'];
			$txtgender=$rows['Gender'];
			$txtdob=$rows['DateofBirth'];
			$txtpd=$rows['PostalAddress'];
			$txtpc=$rows['PostalCode'];
			$txtImage=$rows['Images'];
			echo "<tr>";
			echo "<td>".($i+1)."</td>";
			echo "<td>".$txtC_Name."</td>";
			echo "<td>".$Email."</td>";
			echo "<td>".$Password."</td>";
			echo "<td>".$txtphno."</td>";
			echo "<td>".$txtaddress."</td>";
			echo "<td>".$txtgender."</td>";
			echo "<td>".$txtdob."</td>";
			echo "<td>".$txtpd."</td>";
			echo "<td>".$txtpc."</td>";
			echo "<td>"."<img src='$txtImage' width='200px' height='auto'>"."</td>";
			echo "<td><a href='CustomerUpdate.php?Customer_ID=$Customer_ID'>Edit</a> |
			<a href='CustomerDelete.php?Customer_ID=$Customer_ID'>Delete</a></td>";
			echo "</tr>";
		}
			?>
	</tbody>
</table>

 </body>
 </html>