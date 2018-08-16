<?php
include('../dbcon.php');

	$id= $_REQUEST['sid'];
	
	$qry="DELETE FROM student WHERE id='$id'";;
			
			echo "<br>".$qry;
	$run= mysqli_query($con,$qry);	

if($run) {
	?>
	<script>
	alert('Data Deleted Successfully !');
	window.open('deletestudent.php','_self');
	</script>
	<?php
	}	else {
		?>
	<script>
	alert('Data Deletion Failed !');
	</script>
<?php	
	}
	


?>
