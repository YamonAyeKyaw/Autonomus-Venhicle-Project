<?php 
	session_start();
	session_destroy();
	echo "<script>window.alert('LogOut Successful')</script>";
	echo "<script>window.location='LoginForm.php'</script>";

?>