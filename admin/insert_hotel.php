<?php
include('include/db.php');
if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
}
else{
?>
<html>
<head>
<title>Hotel</title>
</head>
<body>
	
			
			<form method="post" action="insert_hotel.php" enctype="multipart/form-data">
				<table width="1000px" align="center" border="2">
					<tr align="center">
						<td colspan="2"><h1>Insert New Hotel</h1></td>
					</tr>
					<tr>
						<td align="right"><b>Hotel Name</b></td>
						<td><input type="text" name="hotel_name"></td>
					</tr>
					<tr>
						<td align="right"><b>Hotel Category</b></td>
						<td>
							<select name="hotel_cat">
								<option>Select a Category</option>
								<?php
								$get_cat = "select * from categories";
								$run_cat = mysqli_query($con, $get_cat);
								while($row_cat = mysqli_fetch_array($run_cat)){
									$cat_id = $row_cat['cat_id'];
									$cat_title = $row_cat['cat_title'];
								    echo "<option value='$cat_id'>$cat_title</option>";
						         }
					            ?>
							</select>
						</td>
					</tr>
					<tr>
						<td align="right"><b>Hotel City</b></td>
							<td>
							<select name="hotel_city">
								<option>Select a city</option>
								<?php
              $get_c = "select * from city";
               $run_c = mysqli_query($con, $get_c);
                while($row_c = mysqli_fetch_array($run_c)){
                $c_id = $row_c['c_id'];
                $c_title = $row_c['c_title'];
                echo "<option value='$c_id'>$c_title</option>";
               }
            ?>
							</select>
						
						</td>
					</tr>
					<tr>
						<td align="right"><b>Hotel Image</b></td>
						<td><input type="file" name="h_img"></td>
					</tr>
					<tr>
						<td align="right"><b>Standered Room Image</b></td>
						<td><input type="file" name="s_img"></td>
					</tr>
					<tr>
						<td align="right"><b>Deluxe Room Image</b></td>
						<td><input type="file" name="d_img"></td>
					</tr>
					<tr>
						<td align="right"><b>Standered Room Price</b></td>
						<td><input type="text" name="s_price"></td>
					</tr>
					<tr>
						<td align="right"><b>Deluxe Room Price</b></td>
						<td><input type="text" name="d_price"></td>
					</tr>
					<tr>
						<td align="right"><b>Hotel description</b></td>
						<td><textarea name="h_desc" cols="35" rows="10"></textarea></td>
					</tr>
					<tr>
						<td align="right"><b>Standered Room description</b></td>
						<td><textarea name="s_desc" cols="35" rows="10"></textarea></td>
					</tr>
					<tr>
						<td align="right"><b>Deluxe Room description</b></td>
						<td><textarea name="d_desc" cols="35" rows="10"></textarea></td>
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
		$hotel_name = $_POST['hotel_name'];
		$hotel_cat = $_POST['hotel_cat'];
		$hotel_city = $_POST['hotel_city'];
		$s_price = $_POST['s_price'];
		$d_price = $_POST['d_price'];
		$h_desc = $_POST['h_desc'];
		$s_desc = $_POST['s_desc'];
		$d_desc = $_POST['d_desc'];
		$status = 'on';

		$h_img = $_FILES['h_img']['name'];
		$s_img = $_FILES['s_img']['name'];
		$d_img = $_FILES['d_img']['name'];

		$temp_name1 = $_FILES['h_img']['tmp_name'];
		$temp_name2 = $_FILES['s_img']['tmp_name'];
		$temp_name3 = $_FILES['d_img']['tmp_name'];

		if($hotel_name== '' OR $hotel_cat== '' OR $hotel_city== '' OR $h_desc== '' OR $s_desc== '' OR $d_desc=='' OR $s_price== '' OR $d_price==''){
			echo "<script>alert('Please fill the all fields')</script>";
			exit();
		}
		else{

			move_uploaded_file($temp_name1, "h_image/$h_img");
			move_uploaded_file($temp_name2, "h_image/$s_img");
			move_uploaded_file($temp_name3, "h_image/$d_img");

			$insert_hotel = "insert into hotel (c_id,cat_id,date,h_title,h_image,s_image,d_image,s_price,d_price,h_desc,s_desc,d_desc,status) values('$hotel_city','$hotel_cat',NOW(),'$hotel_name','$h_img','$s_img','$d_img','$s_price','$d_price', '$h_desc','$s_desc','$d_desc', '$status')";
			$run_hotel = mysqli_query($con, $insert_hotel);
			if($run_hotel){

				echo "<script>alert('Hotel inserted successfully')</script>";
				echo "<script>window.open('index.php?insert_hotel',('_self'))</script>";
			}
		}

	}
	
?>
<?php  }  ?>