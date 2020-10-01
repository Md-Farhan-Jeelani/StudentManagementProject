<!DOCTYPE HTML>
<html>
<head>
<title>Student Management System</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color: #E3E869">
<div class="admintitle" align="center">
<h3 align="right"><a href="login.php">Admin Login</a></h3>

<h1 align="center">Welcome to Student Management System </h1>
</div>
<form action="index.php" method="POST">
<table width="50%" align="center">
<tr align="center">
	<td colspan="2">Student Information</td>
</tr>
<tr>
	<td >Choose Standard </td>
	<td>
		<select name="std">
		<option value="1">1st</option>
		<option value="2">2nd</option>
		<option value="3">3rd</option>
		<option value="4">4th</option>
		<option value="5">5th</option>
		<option value="6">6th</option>		
		</select>
	</td>
</tr>
<tr>
	<td >Enter RollNo</td>
	<td><input type="text" name="rollno" required ></td>
</tr>

<tr>
<td colspan="5" align="right"><input type="submit" name="send" value="Show Info"></td>
</tr>

</table>
</form>

</body>
</html>

<?php
include('dbcon.php');
include('backend.php');

if(isset($_POST['submit'])) {
	
	$standard= $_POST['student'];
	$rollno= $_POST['rollno'];
	
	showdetails($standard,$rollno);
	
}

?>
