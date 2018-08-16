<?php
session_start();
include('../dbcon.php');
include('header.php');
  if(isset($_SESSION['uid'])) {
	  //echo $_SESSION['uid'];
	  
  } else {
	  header('location: ../login.php');
  }


?>
<?php


?>
<div class="admintitle" align="center">
<a href="admindash.php" style="float: left;padding:20px " ><img src="../icons/if_Left_arrow_circle_2202279.png"></a>
<h1>Welcome To Admin Dashboard</h1>

<h4 style="float: right; color: #fff "><a href="logout.php">Logout</a></h4>
</div>

<form action="addstudent.php" method="POST" enctype="multipart/form-data">


<table align="center">
<tr>
<th>Roll No </th>
<td><input type="text" name="rollno" placeholder="Enter Roll No" required > </td>
</tr>

<tr>
<th>Full Name </th>
<td><input type="text" name="name" placeholder="Enter Full Name" required >  </td>
</tr>

<tr>
<th>City </th>
<td><input type="text" name="city" placeholder="Enter City" required >  </td>
</tr>

<tr>
<th>Parents Contact No </th>
<td><input type="number" name="cno" placeholder="Enter Contact No" required >  </td>
</tr>

<tr>
<th>Standard </th>
<td><input type="number" name="std" placeholder="Enter Standard" required >  </td>
</tr>

<tr>
<th>Image </th>
<td><input type="file" name="simg" required >  </td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="add"></td>
</tr>

</table>

</form>

</body>
</html>

<?php

if(isset($_POST['submit'])) {
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$contno=$_POST['cno'];
	$standard=$_POST['std'];
	$imagename= $_FILES['simg']['name'];
	$tempname= $_FILES['simg']['tmp_name'];
	
	move_uploaded_file($tempname,"../dataimg/$imagename");
	
	$qry="INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standard`,`image`)
			VALUES ('$rollno','$name','$city','$contno','$standard','$imagename')";
			
			echo "<br>".$qry;
	$run= mysqli_query($con,$qry);	

if($run) {
	?>
	<script>
	alert('Data Inserted Successfully');
	</script>
	<?php
	}	else {
		?>
	<script>
	alert('Data Insertion Failed');
	</script>
<?php	
	}
	
	
	
}


?>

