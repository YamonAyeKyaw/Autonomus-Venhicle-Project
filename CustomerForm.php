<?php 
include ('connect.php');
include ('header.php');

if(isset($_POST['btnRegister']))
{
	$Name=$_POST['txtC_Name'];
	$Email=$_POST['txtemail'];
	$Password=$_POST['txtpassword'];
	$PhoneNo=$_POST['txtphno'];
	$Address=$_POST['txtaddress'];
	$Gender=$_POST['txtgender'];
	$DOB=$_POST['txtdob'];
  $PostalAddress=$_POST['txtpd'];
  $PostalCode=$_POST['txtpc'];
	$Image=$_FILES['txtImage']['name'];
	$IImage='../images';

	if ($IImage)
	{
		$filename=$IImage."_".$Image;
		$Copied=copy($_FILES['txtImage']['tmp_name'],$filename);
		if (!$Copied)
		{
			exit("Unexpected error occured, cannot upload image");
		}
	}

	$ins="INSERT into Customer(Customer_Name,Email,Password,PhoneNumber,Gender,DateofBirth,Address,PostalAddress,PostalCode,Images)
			  values('$Name','$Email','$Password','$PhoneNo','$Gender','$DOB','$Address','$PostalAddress','$PostalCode','$filename')";
		$ret=mysqli_query($connection,$ins);

		if ($ret) 
		{
			echo "<script>
				 	alert('Customer recorded');
				  </script>";
			echo "<script>window.location='LoginForm.php'</script>";
			
		}
}

?>
<style>
  button{
    width: 150px;
    background-color: #728ab5;
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
                          <form action="CustomerForm.php" method="POST" enctype="multipart/form-data">
                          	<h2 style="color: darkgoldenrod;">Customer Register</h2>
                            <div class="form-group">
                              <input type="text" class="email-bt" name="txtC_Name" placeholder="Enter Customer Name" required/>
                            </div>

                            <div class="form-group">
                              <input type="email" class="email-bt" name="txtemail" required placeholder="Enter Email Address"/>
                            </div>

                            <div class="form-group">
                              <input type="password" class="email-bt" name="txtpassword" placeholder="Enter Password" required/>
                            </div>

                            <div class="form-group">
                              <input type="text" class="email-bt" name="txtphno" placeholder="Enter Phone Number" required/>
                            </div>

                            <div class="form-group">
                              <input type="date" class="email-bt" name="txtdob" required/>
                            </div>

                            <div class="form-group">
						<textarea name="txtaddress" class="email-bt" placeholder="Enter Address"></textarea>
							</div>

                            <div class="form-group">
                              <input type="text" class="email-bt" name="txtpd" required placeholder="Enter Postal Address"/>
                            </div>

                            <div class="form-group">
                              <input type="text" class="email-bt" name="txtpc" placeholder="Enter Postal Code" required/>
                            </div>

                            <div class="form-group">
								<input type="radio" class="email-b" value="Male" name="txtgender">Male
								<input type="radio" class="email-b" value="Female" name="txtgender">Female
							</div>

							<div class="form-group">
                <td>
                    <input class="email-bt" type="file" name="txtImage">
                </td>
    </div>

    <div class="form-group">
		<button class="tm-submit.btn" type="submit" name="btnRegister"><span>Register</span></button>
	</div> 
  <div>
    Already Register? Click <a href="LoginForm.php">Login</a>
      <style type="text/css">
        a
        {
          color: darkgoldenrod;
        }
        a.hover
        {
          color: #187d6e;
        }
      </style>
  </div>
                            
                          </form>
                       </div> 
                    </div>
                </div>
<div class="col-md-6">
  <style type="text/css">
    img[class=imgdchs]
    {
      height: 700px;
      width: 400px;
    }
  </style>
  <img src="images/driverless-cars-history-share.jpg" class="imgdchs">
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
include ('footer.php');
 ?>
  </body>
</html>