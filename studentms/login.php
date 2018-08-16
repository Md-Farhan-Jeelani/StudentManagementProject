<?php

session_start();
if(isset($_SESSION['uid'])) {
	header('location: admin/admindash.php');
}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Admin Login</title>
<link href="css/style1.css" rel="stylesheet" type= "text/css">
</head>
<body style="background-color:#E3E869">

<div class="admintitle" align="center">
<h1>Admin Login</h1>
</div>



<form action="login.php" method="POST">
<table align="center" style="padding-top:40px">
<tr>
	<td >UserName</td>
	<td><input type="text" name="uname" required ></td>
</tr>
<tr>
	<td >Password</td>
	<td><input type="password" name="pass" required ></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="Login"></td>

</table>
</form>

</body>
</html>

<?php
include('dbcon.php');
//session_start();

if(isset($_POST['submit'])) {
	
	$username= $_POST['uname'];
	$password=$_POST['pass'];
	
	$q= "SELECT * FROM admin WHERE username='$username' && password='$password'";
	$run = mysqli_query($con, $q);
	$row= mysqli_num_rows($run);
	
	if($row<1){
		
		?>
		
		<script>
			alert('UserName or Password do not Match..!');
			window.open('login.php','_SELF');
		</script>
		<?php
	}
	else{
		
		echo "Login Successful";
		$data= mysqli_fetch_assoc($run);
		
		$id= $data['id'];
		$_SESSION['uid']=$id;
		
		header('location: admin/admindash.php');
		
	}
	
	
}



?>
