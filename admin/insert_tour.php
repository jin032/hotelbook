<?php
include('include/db.php');
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
	
			
			<form method="post" action="insert_tour.php" enctype="multipart/form-data">
				<table width="1000px" align="center" border="2">
					<tr align="center">
						<td colspan="2"><h1>Insert New Tour</h1></td>
					</tr>
					<tr>
						<td align="right"><b>Tour Name</b></td>
						<td><input type="text" name="t_title"></td>
					</tr>
				
					<tr>
						<td align="right"><b>Tour Image1</b></td>
						<td><input type="file" name="t_img1"></td>
					</tr>
					<tr>
						<td align="right"><b>Tour Image2</b></td>
						<td><input type="file" name="t_img2"></td>
					</tr>
					<tr>
						<td align="right"><b>Tour Image3</b></td>
						<td><input type="file" name="t_img3"></td>
					</tr>
					<tr>
						<td align="right"><b>Tour Price</b></td>
						<td><input type="text" name="t_price"></td>
					</tr>
					
					<tr>
						<td align="right"><b>Tour description</b></td>
						<td><textarea name="t_desc" cols="35" rows="10"></textarea></td>
					</tr>

					<tr>
						<td align="right"><b>Tour duration</b></td>
						<td><input type="text" name="t_dur"></td>
					</tr>

					<tr>
						<td align="right"><b>Tour discount</b></td>
						<td><input type="text" name="t_dis"></td>
					</tr>

					<tr>
						<td align="right"><b>Start date</b></td>
						<td><input type="date" name="s_date"></td>
					</tr>

					<tr>
						<td align="right"><b>End date</b></td>
						<td><input type="date" name="e_date"></td>
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

		if($t_title== '' OR $t_price== '' OR $t_desc== '' OR $t_dur== '' OR $t_dis== '' OR $s_date=='' OR $e_date== ''){
			echo "<script>alert('Please fill the all fields')</script>";
			exit();
		}
		else{

			move_uploaded_file($temp_name1, "t_image/$t_img1");
			move_uploaded_file($temp_name2, "t_image/$t_img2");
			move_uploaded_file($temp_name3, "t_image/$t_img3");

			$insert_tour = "insert into tour (date,t_title,t_img1,t_img2,t_img3,t_price,t_desc,t_dur,t_dis,s_date,e_date) values(NOW(),'$t_title','$t_img1','$t_img2','$t_img3','$t_price','$t_desc','$t_dur', '$t_dis','$s_date','$e_date')";
			$run_tour = mysqli_query($con, $insert_tour);
			if($run_tour){

				echo "<script>alert('Tour inserted successfully')</script>";
				echo "<script>window.open('index.php?insert_tour',('_self'))</script>";
			}
		}

	}
	
?>

<?php  } ?>
