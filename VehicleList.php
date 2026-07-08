<?php 
include('connect.php');
include('adminheader.php');
 ?>
<table id="TableID" class="display" width="1100px">
	<thead>
		<tr>
			<th>	No</th>
			<th>Vehicle Name</th>
			<th>Type</th>
			<th>Colour</th>
			<th>Description</th>
			<th>Unit Price</th>
			<th>Quantity</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$query="SELECT * from vehicle";
		$result=mysqli_query($connection,$query);
		$count=mysqli_num_rows($result);
		for ($i=0;$i<$count;$i++)
		{
			$rows=mysqli_fetch_array($result);
			$VehicleID=$rows['VehicleID'];
			$VehicleName=$rows['VehicleName'];
			$Type=$rows['Type'];
			$Colour=$rows['Colour'];
			$Description=$rows['Description'];
			$UnitPrice=$rows['UnitPrice'];
			$Quantity=$rows['Quantity'];
			$VehicleImage=$rows['VehicleImage'];
			echo "<tr>";
			echo "<td>".($i+1)."</td>";
			echo "<td>".$VehicleName."</td>";
			echo "<td>".$Type."</td>";
			echo "<td>".$Colour."</td>";
			echo "<td>".$Description."</td>";
			echo "<td>".$UnitPrice."</td>";
			echo "<td>".$Quantity."</td>";
			echo "<td>"."<img src='$VehicleImage' width='200px' height='auto'>"."</td>";
			echo "<td><a href='VehicleUpdate.php?VehicleID=$VehicleID'>Edit</a> |
			<a href='VehicleDelete.php?VehicleID=$VehicleID'>Delete</a></td>";
			echo "</tr>";
		}
			?>
	</tbody>
</table>

<?php 
include('footer.php');
 ?>