<?php
			include("include/db.php");
			if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
}
else{
			?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>
</head>
<body>
	<?php if (isset($_GET['view_tours'])) {
	 ?>
	<table width="1000" align="center">
		<tr align="center">
			<td colspan="10"><h2>View all Tours</h2></td>
		</tr>
		<tr>
			<th>Tour No.</th>
			<th>Image</th>
			<th>Title</th>
			<th>Price</th>
			<th>Duration</th>
			<th>Start Date</th>
			<th>End Date</th>
			<th>Discount Price</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php
			include("include/db.php");
			$i = 0;
			$get_to = "select * from tour";
			$run_to = mysqli_query($con, $get_to);
			while ($row_to = mysqli_fetch_array($run_to)) {
				$t_id = $row_to['t_id'];
				$t_title = $row_to['t_title'];
				$t_image = $row_to['t_img1'];
				$t_price = $row_to['t_price'];
				$t_dur = $row_to['t_dur'];
				$t_dis = $row_to['t_dis'];
				$s_date = $row_to['s_date'];
				$e_date = $row_to['e_date'];
				$i++;
			

		?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><img src="t_image/<?php echo $t_image  ?>" width="50" height="50"></td>
			<td><?php echo $t_title; ?></td>
			<td><?php echo $t_price; ?></td>
			<td><?php echo $t_dur; ?></td>
			<td><?php echo $s_date; ?></td>
			<td><?php echo $e_date; ?></td>
			<td><?php echo $t_dis; ?></td>
			<td><a href="index.php?edit_tour=<?php echo $t_id; ?>">Edit</a></td>
			<td><a href="delete_tour.php?delete_tour=<?php echo $t_id; ?>">Delete</a></td>
		</tr>
<?php } ?>


	</table>	
<?php } ?>

</body>
</html>


<?php } ?>