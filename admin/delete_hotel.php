<?php
include("include/db.php");
if (isset($_GET['delete_hotel'])) {
	$delete_id = $_GET['delete_hotel'];

	$delete_hotel = "delete from hotel where h_id='$delete_id'";
	$run_delete = mysqli_query($con, $delete_hotel);
	if($run_delete){
		echo "<script>alert('One hotel has been deleted!')</script>";
		echo "<script>window.open('index.php?view_hotel','_self')</script>";
	}
}



?>