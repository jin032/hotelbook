<?php
include("include/db.php");
if (isset($_GET['delete_tour'])) {
	$delete_id = $_GET['delete_tour'];

	$delete_tour = "delete from tour where t_id='$delete_id'";
	$run_delete = mysqli_query($con, $delete_tour);
	if($run_delete){
		echo "<script>alert('Tour has been deleted!')</script>";
		echo "<script>window.open('index.php?view_tours','_self')</script>";
	}
}



?>