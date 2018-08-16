<?php
session_start();
  if(isset($_SESSION['uid'])) {
	  //echo $_SESSION['uid'];
	  
  } else {
	  header('location: ../login.php');
  }


?>
<?php
include('header.php');
include('../dbcon.php');
$sid= $_GET['sid']; 

$q= "SELECT * FROM student WHERE id='$sid'";
$run= mysqli_query($con,$q);
$data=mysqli_fetch_assoc($run);



?>
<div class="admintitle" align="center">

<h1>Welcome To Admin Dashboard</h1>

<h4 style="float: right; color: #fff "><a href="logout.php">Logout</a></h4>
</div>

<form action="updatedata.php" method="POST" enctype="multipart/form-data">


<table align="center">
<tr>
<th>Roll No </th>
<td><input type="text" name="rollno" value=<?php echo $data['rollno'];?> required > </td>
</tr>

<tr>
<th>Full Name </th>
<td><input type="text" name="name" value=<?php echo $data['name'];?> required >  </td>
</tr>

<tr>
<th>City </th>
<td><input type="text" name="city" value=<?php echo $data['city'];?> required >  </td>
</tr>

<tr>
<th>Parents Contact No </th>
<td><input type="number" name="cno" value=<?php echo $data['pcont'];?> required >  </td>
</tr>

<tr>
<th>Standard </th>
<td><input type="number" name="std" value=<?php echo $data['standard'];?> required >  </td>
</tr>

<tr>
<th>Image </th>
<td><input type="file" name="simg" required >  </td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="hidden" name="sid" value="<?php echo $data['id'];  ?>">
<input type="submit" name="submit" value="Update"></td>
</tr>

</table>

</form>

</body>
</html>