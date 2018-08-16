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
include('../dbcon.php'); ?>
<div class="admintitle" align="center">

<h1>Welcome To Admin Dashboard</h1>

<h4 style="float: right; color: #fff "><a href="logout.php">Logout</a></h4>
</div>
 
 
 <form action= "deletestudent.php" method="POST">
 <table align="center" style="padding-top:25px;">
 
<tr>
 <th>Enter Standard</th>
 <td><input type="number" name="standard" placeholder="Enter Standard" required></td>
  
 
 <th>Enter Student Name</th>
 <td><input type="text" name="stuname" placeholder="Enter Student Name" required></td>

 <td colspan="2" align="right"><input type="submit" name="submit" value="Search"></td>
</tr> 
</table>
</form>

<table align="center" width="80%" border=1 style="margin-top:10px;">
<tr style="background-color:#000; color:#fff">
	<th>No</th>
	<th>Image</th>
	<th>Name</th>
	<th>Roll No</th>
	<th>Edit</th>
	
</tr>


<?php  
if(isset($_POST['submit'])) {
	
	$standard=$_POST['standard'];
	$name=$_POST['stuname'];
	
	$qry= "SELECT * FROM student WHERE standard='$standard' && name LIKE '%$name%'";
	$run=mysqli_query($con,$qry);
	
	$rows=mysqli_num_rows($run);
		
	
	if(mysqli_num_rows($run)<1) {
		echo "<tr><td colspan='5'>No Records Found</tr></td>";
	}
	else{
		$count=0;
		while($data=mysqli_fetch_assoc($run)) {
			$count++;
			?>
			<tr align="center">
				<td><?php echo $count ; ?></td>
				<td><img src="../dataimg/<?php echo $data['image']?>" style="max-width: 100px;"></td>
				<td><?php echo $data['name']; ?></td>
				<td><?php echo $data['rollno']; ?></td>
				<td><a href="deleteform.php?sid=<?php echo $data['id']; ?>">Delete</a></td>
			</tr>
			
			<?php
		}
		?>
		</table>

</body>
</html>
		
		<?php
	}
	
}

?>
