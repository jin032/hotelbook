<?php
include('include/db.php');
if (isset($_GET['edit_tour'])) {
	$edit_id = $_GET['edit_tour'];
	$get_edit = "select * from tour where t_id='$edit_id'";
	$run_edit = mysqli_query($con, $get_edit);
	$row_edit = mysqli_fetch_array($run_edit);
	$update_id = $row_edit['t_id'];
	$t_title = $row_edit['t_title'];
	$t_img1 = $row_edit['t_img1'];
	$t_img2 = $row_edit['t_img2'];
	$t_img3 = $row_edit['t_img3'];
	$t_price = $row_edit['t_price'];
	$t_desc = $row_edit['t_desc'];
	$t_dur = $row_edit['t_dur'];
	$t_dis = $row_edit['t_dis'];
	$s_date = $row_edit['s_date'];
	$e_date = $row_edit['e_date'];
}

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
}
else{
?>
<html>
<head>
<title>Tour</title>
</head>
<body>
	
			
			<form method="post" action="" enctype="multipart/form-data">
				<table width="1000px" align="center" border="2">
					<tr align="center">
						<td colspan="2"><h1>Edit Tour</h1></td>
					</tr>
					<tr>
						<td align="right"><b>Tour Name</b></td>
						<td><input type="text" name="t_title" value="<?php echo $t_title; ?>"></td>
					</tr>
				
					<tr>
						<td align="right"><b>Tour Image1</b></td>
						<td><input type="file" name="t_img1"><img src="t_image/<?php echo $t_img1; ?>" width="50" height="50"></td>
					</tr>
					<tr>
						<td align="right"><b>Tour Image2</b></td>
						<td><input type="file" name="t_img2"><img src="t_image/<?php echo $t_img2; ?>" width="50" height="50"></td>
					</tr>
					<tr>
						<td align="right"><b>Tour Image3</b></td>
						<td><input type="file" name="t_img3"><img src="t_image/<?php echo $t_img3; ?>" width="50" height="50"></td>
					</tr>
					<tr>
						<td align="right"><b>Tour Price</b></td>
						<td><input type="text" name="t_price" value="<?php echo $t_price; ?>"></td>
					</tr>
					
					<tr>
						<td align="right"><b>Tour description</b></td>
						<td><textarea name="t_desc" cols="35" rows="10"><?php echo $t_desc; ?></textarea></td>
					</tr>

					<tr>
						<td align="right"><b>Tour duration</b></td>
						<td><input type="text" name="t_dur" value="<?php echo $t_dur; ?>"></td>
					</tr>

					<tr>
						<td align="right"><b>Tour discount</b></td>
						<td><input type="text" name="t_dis" value="<?php echo $t_dis; ?>"></td>
					</tr>

					<tr>
						<td align="right"><b>Start date</b></td>
						<td><input type="date" name="s_date"><?php echo $s_date; ?></td>
					</tr>

					<tr>
						<td align="right"><b>End date</b></td>
						<td><input type="date" name="e_date"><?php echo $e_date; ?></td>
					</tr>
					
					<tr align="center">
						<td colspan="2"><input type="submit" name="submit"></td>
					</tr>


				</table>
			</form>
		
</body>

</html>
<?php
	if(isset($_POST['submit'])){
		$t_title = $_POST['t_title'];
		$t_price = $_POST['t_price'];
		$t_desc = $_POST['t_desc'];
		$t_dur = $_POST['t_dur'];
		$t_dis = $_POST['t_dis'];
		$s_date = $_POST['s_date'];
		$e_date = $_POST['e_date'];
		

		$t_img1 = $_FILES['t_img1']['name'];
		$t_img2 = $_FILES['t_img2']['name'];
		$t_img3 = $_FILES['t_img3']['name'];

		$temp_name1 = $_FILES['t_img1']['tmp_name'];
		$temp_name2 = $_FILES['t_img2']['tmp_name'];
		$temp_name3 = $_FILES['t_img3']['tmp_name'];

		if($t_title== ''){
			echo "<script>alert('Please fill the title fields')</script>";
			exit();
		}
		else{

			move_uploaded_file($temp_name1, "t_image/$t_img1");
			move_uploaded_file($temp_name2, "t_image/$t_img2");
			move_uploaded_file($temp_name3, "t_image/$t_img3");

			$insert_tour = "update tour set date=NOW(),t_title='$t_title',t_img1='$t_img1',t_img2='$t_img2',t_img3='$t_img3',t_price='$t_price',t_desc='$t_desc',t_dur='$t_dur',t_dis='$t_dis',s_date='$s_date',e_date='$e_date' where t_id='$update_id'";
			$run_tour = mysqli_query($con, $insert_tour);
			if($run_tour){

				echo "<script>alert('Tour updated successfully')</script>";
				echo "<script>window.open('index.php?view_tours',('_self'))</script>";
			}
		}

	}
	
?>
<?php  } ?>