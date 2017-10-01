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
	<?php if (isset($_GET['view_hotel'])) {
	 ?>
	<table width="1000" align="center">
		<tr align="center">
			<td colspan="7"><h2>View all Hotels</h2></td>
		</tr>
		<tr>
			<th>Hotel No.</th>
			<th>Image</th>
			<th>Title</th>
			<th>Standered Price</th>
			<th>Deluxe Price</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php
			include("include/db.php");
			$i = 0;
			$get_ho = "select * from hotel";
			$run_ho = mysqli_query($con, $get_ho);
			while ($row_ho = mysqli_fetch_array($run_ho)) {
				$h_id = $row_ho['h_id'];
				$h_title = $row_ho['h_title'];
				$h_image = $row_ho['h_image'];
				$s_price = $row_ho['s_price'];
				$d_price = $row_ho['d_price'];
				$i++;
			

		?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><img src="h_image/<?php echo $h_image  ?>" width="50" height="50"></td>
			<td><?php echo $h_title; ?></td>
			<td><?php echo $s_price; ?></td>
			<td><?php echo $d_price; ?></td>
			<td><a href="index.php?edit_hotel=<?php echo $h_id; ?>">Edit</a></td>
			<td><a href="delete_hotel.php?delete_hotel=<?php echo $h_id; ?>">Delete</a></td>
		</tr>
<?php } ?>


	</table>	
<?php } ?>

</body>
</html>


<?php  }  ?>