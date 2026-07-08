<?php 
session_start();
include('connect.php');
include 'adminheader.php';
if(isset($_POST['btnRegister']))
{
$faqtitleid=$_POST['cboFAQTitle'];
$Question=$_POST['txtQuestion'];
$Response=$_POST['txtResponse'];

$insert="INSERT INTO FAQ(faqtitleno,question,response) values('$faqtitleid','$Question','$Response')";
$query=mysqli_query($connection,$insert);

if($query) 
{
	echo "<script>alert('FAQ  Register Successful');</script>";
}
else
{
	echo "<script>alert('FAQ cannot be Registered');</script>";
				
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
        
        input[type=submit], input[type=reset]
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
  <form action="FAQ.php" method="POST">    
        <table align="center">
            <tr>
                        <td colspan="2" align="center"><h2>FAQ </h2></td>        
                        </tr>

        	<tr>
        		<td>
        			Choose Title
        		</td>
        		<td>
        			<select name="cboFAQTitle">
						<option>  Please select the type of Question  </option>
						<?php 
							$FAQTitle="SELECT * FROM FAQTitle ORDER BY titlename";
							$result=mysqli_query($connection,$FAQTitle);
							$count=mysqli_num_rows($result);
							for ($i=0; $i < $count; $i++) { 
								$arr=mysqli_fetch_array($result);
								echo "<option value='".$arr['faqtitleno']."'>".
								$arr['titlename']."</option>";
							}
						 ?>
					</select>
        		</td>
        	</tr>
        	<tr>
        		<td>
        			Question
        		</td>
        		<td>
        			 <input name="txtQuestion" type="text" required>
        		</td>
        	</tr>
        	<tr>
        		<td>
        			Response
        		</td>
        		<td>
        			<input name="txtResponse"  type="text" required>
        		</td>
        	</tr>
        	<tr>
        		<td></td>
        		<td>
				<input  name="btnRegister" value="REGISTER" type="submit">
          		<input type="reset" value="CLEAR">	
        		</td>
        	</tr>
            <tr>
                <td></td>
                <td><div>For FAQ Display,
 <a href="FAQDisplay.php"><b><u>Click Here</u></b></a></div>
 <div>IFor FAQ Title,
 <a href="FAQTitle.php"><b><u>Click Here</u></b></a></div></td>
            </tr>
        </table>
	       </form>
           
<?php 
include 'footer.php';
?>

</body>
</html>