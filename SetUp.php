<?php 
include('Connect.php');

// $drop="Drop table customer";
// $query=mysqli_query($connection,$drop);
// if($query)
// {
// 	echo "<p>Customer Drop Successful</p>";
// }

// $drop="Drop table vehicle";
// $query=mysqli_query($connection,$drop);
// if($query)
// {
// 	echo "<p>Vehicle Drop Successful</p>";
// }

// $drop="Drop table admin";
// $query=mysqli_query($connection,$drop);
// if($query)
// {
// 	echo "<p>Admin Drop Successful</p>";
// }

// $drop="Drop table brand";
// $query=mysqli_query($connection,$drop);
// if($query)
// {
// 	echo "<p>Brand Drop Successful</p>";
// }

// $drop="Drop table contactus";
// $query=mysqli_query($connection,$drop);
// if($query)
// {
// 	echo "<p>ContactUs Drop Successful</p>";
// }

$drop="Drop table faq";
$query=mysqli_query($connection,$drop);
if($query)
{
	echo "<p>FAQ Drop Successful</p>";
}

$drop="Drop table faqtitle";
$query=mysqli_query($connection,$drop);
if($query)
{
	echo "<p>FAQtitle Drop Successful</p>";
}




$create="Create table Customer
(
CustomerID int AUTO_INCREMENT PRIMARY KEY,
Name varchar(50),
Email varchar(30),
Password Varchar(30),
ConfirmPassword Varchar(30),
PhoneNumber Varhcar(30),
DateOfBirth Varchar(12),
Address varchar(50),
PostalCode varchar(20)
)";

$query=mysqli_query($connection,$create);
if($query)
{
	echo "<p>Customer Create Successful</p>";
}


$create="Create table Admin
(
AdminID int AUTO_INCREMENT PRIMARY KEY,
AdminName varchar(30),
Email varchar(30),
Password varchar(50),
PhoneNo varchar(20)
)";

$query=mysqli_query($connection,$create);
if($query)
{
	echo "<p>Admin Create Successful</p>";
}


$create="Create table Brand
(
BrandID int AUTO_INCREMENT PRIMARY KEY,
BrandName varchar(30),
BrandImage varchar(50)
)";

$query=mysqli_query($connection,$create);
if($query)
{
	echo "<p>Brand Create Successful</p>";
}

$create="Create table FAQTitle
(
TitleID int AUTO_INCREMENT PRIMARY KEY,
TitleName varchar(50)
)";

$query=mysqli_query($connection,$create);
if($query)
{
	echo "<p>FAQTitle Create Successful</p>";
}


$create="Create table Vehicle
(
VehicleID int AUTO_INCREMENT PRIMARY KEY,
VehicleModel Varhcar(30),
VehicleLicense Varchar(20),
VehicleColor Varchar(20),
Year Varchar(5),
InteriorColor varchar(20),
Price int,
Description Varchar(50),
Quantity int,
BrandID int,
VehicleImage varchar(50)
)";

$query=mysqli_query($connection,$create);
if($query)
{
	echo "<p>Vehicle Create Successful</p>";
}

$create="Create table ContactUs
(
ContactUsID int AUTO_INCREMENT PRIMARY KEY,
Name varchar(50),
Email varchar(50),
Message varchar(100),
Reply varchar(100),
FOREIGN KEY (FirstName) references Customer (FirstName)
)";

$query=mysqli_query($connection,$create);
if($query)
{
	echo "<p>Contact us Create Successful</p>";
}

$create="Create table FAQ
(
FAQID int AUTO_INCREMENT PRIMARY KEY,
TitleID int,
Question varchar(100),
Response varchar(100),
FOREIGN KEY (TitleID) references FAQTitle(TitleID)
)";

$query=mysqli_query($connection,$create);
if($query)
{
	echo "<p>FAQ Create Successful</p>";
}


// $insert="INSERT INTO Vehicle values
// (1,'SUA','1A-1111','white','2021','black',100,'-',10,3,'images/a.jpeg')";

// $query=mysqli_query($connection,$insert);
// if($query)
// {
// 	echo "<p>Vehicle Insert Successful</p>";
// }

// $insert="INSERT INTO Vehicle values(1,'Model 1 Vehicle','1A-1111','white','2021','black',100,'-',10,3,'images/a.jpeg')";

// $query=mysqli_query($connection,$insert);
// if($query)
// {
// 	echo "<p>Vehicle Insert Successful</p>";
// }


//  ?>
