<?php 
session_start();
include('Connect.php');
include ('Header.php');
if(isset($_SESSION['cid']))
{

   echo "<script>alert('Contact Us Page')</script>";

   
}
if(isset($_POST['btnsubmit']))
{
   $customerid=$_SESSION['cid'];
   $email=$_POST['txtemail'];
   $comment=$_POST['txtcomment'];

   $insert="INSERT INTO contactus(Customer_ID,email,comment)
   values('$customerid','$email','$comment')";
   $query=mysqli_query($connection,$insert);
   if($query)
   {
      echo "<script>alert('Contact Us Successful')</script>";
      echo "<script>window.location='Home.php'</script>";
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
   input[type=submit]
   {
      width: 100px;
      background-color:black ;
      color: white;      
       cursor: pointer;
   }
   input[type=submit]:hover
      {
       background-color: #2a3036;
      }
</style>
   <form action="ContactUs.php" method="POST">
      <table align="center">
         <tr>
                  <td colspan="2" align="center"><h2>Contact Us</h2></td>     
                  </tr>

         <tr>
            <td>Customer Name</td>
            <td>
               <input type="text" name="txtcustomerid" value="<?php echo $_SESSION['cname'] ?>" readonly>
            </td>
         </tr>
         <tr>
            <td>
               Email Address
            </td>
            <td>
               <input type="email" name="txtemail" required placeholder="Enter Email Address">
            </td>
         </tr>
         <tr>
            <td>Comment</td>
            <td>
               <textarea name="txtcomment">
                  
               </textarea>
            </td>
         </tr>
         <tr>
            <td></td>
            <td>
               <input type="submit" name="btnsubmit" value="Submit">
            </td>
         </tr>
         <td></td>
         <td>
            <div>If you want to check if your questions have been answered by us,
 <a href="ContactUsDisplay.php"><b><u>Click Here</u></b></a>!</div>
 <div>Before submitting your statement,
 <a href="FAQDisplay.php"><b><u>Check Here</u></b></a> for our FAQs page.
 </div>
         </td>
      </table>
   </form>

   <div class="mapouter"><div class="gmap_canvas"><iframe width="585" height="495" id="gmap_canvas" src="https://maps.google.com/maps?q=Myanmar%20Expo%20Hall,%20Yangon&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-toorg.blogspot.com"></a><br>
      <style>
      .mapouter{position:relative;textalign:center;height:495px;width:585px;}</style><a href="https://google-mapgenerator.com">use google maps on website</a><style>.gmap_canvas 
{overflow:hidden;background:none!important;height:495px;width:585px;}</style></div></div>
 <small><a href="https://maps.google.com" style="color:#8525e6;text-align:left">Enlarge Map</a></small> 
</div>
</body>
</html>
<?php 
include ('Footer.php'); ?>