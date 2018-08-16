<?php
include('../dbcon.php');
	
	

	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$contno=$_POST['cno'];
	$standard=$_POST['std'];
	$id=$_POST['sid'];
	$imagename= $_FILES['simg']['name'];
	$tempname= $_FILES['simg']['tmp_name'];
	
	move_uploaded_file($tempname,"../dataimg/$imagename");
	
	$qry="UPDATE student SET rollno='$rollno',
		name='$name',city='$city',pcont='$contno',standard='$standard',image='$imagename' WHERE id='$id'";;
			
			echo "<br>".$qry;
	$run= mysqli_query($con,$qry);	

if($run) {
	?>
	<script>
	alert('Data Updated Successfully !');
	window.open('updateform.php?sid=<?php echo $id?>','_self');
	</script>
	<?php
	}	else {
		?>
	<script>
	alert('Data Updation Failed !');
	</script>
<?php	
	}
	


?>
