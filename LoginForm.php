<?php 
session_start();	
include('Connect.php');
include('Header.php');
if(isset($_POST['btnlogin']))
{
	
	$username=$_POST['txtusername'];
	$password=$_POST['txtpassword'];

		$select="SELECT * FROM customer where Customer_Name='$username' and password='$password'";
		$query=mysqli_query($connection,$select);
		$count=mysqli_num_rows($query);
		if($count>0)
		{

			$data=mysqli_fetch_array($query);
			$customerid=$data['Customer_ID'];
			$customername=$data['Customer_Name'];
			$_SESSION['cid']=$customerid;
			$_SESSION['cname']=$customername;

			echo "<script>alert('Login Successful')</script>";
			echo "<script>window.location='CustomerUpdate.php'</script>";
		}

			else
		{
			if (isset($_SESSION['loginError']))
			{
				$countError=$_SESSION['loginError'];
				if ($countError==1)
			{
				$_SESSION['loginError']=2;
				echo "<script>window.alert('Login failed! Please try again! Attempt 2')</script>";
			}
			if ($countError==2)
			{
				echo "<script>window.alert('Login failed! Attempt 3! Account is locked for 10mins! Please try again later.')</script>";
				echo "<script>window.location='LoginTimer.php'</script>";
			}
		
		}
			else
			{
				$_SESSION['loginError']=1;
				echo "<script>window.alert('Login failed! Please try again! Attempt 1')</script>";
			}
		}
}
?>
<style>
	p
	{
		color: #b0814c;
	}
	input[type=submit]
	{
		width: 100px;
  background-color: #b0814c;
  color: white;
  padding: 10px 25px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-weight: bold;
  transition-duration:0.3s;
	}
</style>
<div class="contact_section layout_padding">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-6">
                    <div class="input_main">
                       <div class="container">
                          <form action="LoginForm.php" method="POST">	
                          	<h2 style="color: darkgoldenrod;">Login Form</h2>
                          	<p>
                          		This is Customer Login Form. 
                          	</p>
                          	<br>
                            <div class="form-group">
                            	<label>User Name</label>
                            	<br>
                              <input type="text" class="email-bt" name="txtusername" required placeholder="Enter User Name">
                            </div>

                            <div class="form-group">
                            	<label>Password</label>
                            	<br>
                              <input type="password" class="email-bt" name="txtpassword" required placeholder="Enter Password">
                            </div>


    <div class="form-group">
		<input type="submit" name="btnlogin" value="Login">
		<br>
								~ If you haven't registered click <a href="CustomerForm.php" class="reg"> Register </a>
								<style type="text/css">
									a[class=reg]:hover
									{
										color: red;
									}
									a[class=reg]
									{
										color: red;
									}
									img[class=imgfv]
									{
										height: 400px;
										width: 400px;
									}

								</style>
	</div> 
                            
                          </form>
                       </div> 
                    </div>
                </div>                                            
<div class="col-md-6">
	<img src="images/futurevehicle.jpg" class="imgfv">

</div>
    			<!-- <div class="col-md-6">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                    </div>
    			</div> -->
    		</div>
    	</div>
    </div>
	
	
<?php 
include 'footer.php';
?>
 </body>
</html>