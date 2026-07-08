<?php 
	include('Connect.php');
	include 'header.php';
 ?> 

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<font size="5">
<table align="center"><tr><th>Frequently Asked Questions</th></tr></table></font>
  <br>

	<table width="100%">
		<tr>
			<td><i>No.</i></td>
			<td><i>Title</i></td>
			<td><i>Question</i></td>
			<td><i>Response</i></td>
		</tr>
		<?php 
			$query="SELECT f.*,ft.* FROM FAQ f, FAQTitle ft
					WHERE f.faqtitleno=ft.faqtitleno
					ORDER BY f.faqtitleno";
			$result=mysqli_query($connection,$query);
			$count=mysqli_num_rows($result);
			if ($count>0) {
				for ($i=0; $i < $count; $i++) { 
					$arr=mysqli_fetch_array($result);
		?>
		<tr>
			<td><?php echo $i+1; ?></td>

			<td><?php echo $arr['titlename']; ?></td>
			<td><b><?php echo $arr['question']; ?></b></td>
			<td><?php echo $arr['response']; ?></td>
		</tr>

		<?php
				}
			}
		 ?>
	</table>
	<div>
    

</th>
</table>
</body>
</html>
<?php 
include 'footer.php';
 ?>