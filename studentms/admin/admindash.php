<?php
session_start();
  if(isset($_SESSION['uid'])) {
	  //echo $_SESSION['uid'];
	  
  } else {
	  header('location: ../login.php');
  }


?>
<?php
include('header.php'); ?>
<div class="admintitle" align="center">

<h1>Welcome To Admin Dashboard</h1>

<h4 style="float: right; color: #fff "><a href="logout.php">Logout</a></h4>
</div>


<div class="dashboard">
<table style="width: 50%" align="center"> 
<tr>
<td>1. </td>
<td><a href="addstudent.php" >Insert Student Details</a> </td>
</tr>

<tr>
<td>2. </td>
<td><a href="updatestudent.php" >Update Student Details</a> </td>
</tr>

<tr>
<td>3. </td>
<td><a href="deletestudent.php" >Delete Student Details</a> </td>
</tr>

</table>
</div>


</body>
</html>
