<?php
include('Connect.php');
include('Header.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<style>
.myTable1 {
text-align: center;
background-color: #a493d9;
border-collapse: collapse;
}
.myTable1 th {
background-color: #a493d9;
color: white;
}
.myTable1 td,
.myTable1 th {
padding: 10px;
border: 1px solid gainsboro;
}
</style>
<body>
<div id="container">
<div style="margin-top:40px">
<h1 class="heading_bg" style="text-align:center"><b><i><u> Satisfied with what we have responded? </u></i></b></h1>
</div>
<br>
<table border="1" width="60%" height="100" align="center" class="myTable1">
<tr>
<th><i>No.</i></th>
<th><i>CustomerID</i></th>
<th><i>Comment</i></th>
<th><i>Reply</i></th>
</tr>
<?php
$query="SELECT * FROM contactus
WHERE reply!= ''
ORDER BY contactusno";
$result=mysqli_query($connection,$query);
$count=mysqli_num_rows($result);
if ($count>0) {
for ($i=0; $i < $count; $i++) {
$arr=mysqli_fetch_array($result);
?>
<tr>
<td><?php echo $i+1; ?></td>
<td><?php echo $arr['Customer_ID']; ?></td>
<td><b><?php echo $arr['comment']; ?></b></td>
<td><?php echo $arr['reply']; ?></td>
</tr>
<?php
}
}
?>
</table>
</div>
<br>
<br>
<?php
include('Footer.php');
?>
</body>
</html>