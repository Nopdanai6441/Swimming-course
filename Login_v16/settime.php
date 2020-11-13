<!DOCTYPE html>
<html lang="en">

<head>
	<title>Editmember</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>
	<?php
	include_once('connect.php');
	mysqli_set_charset($conn, "utf8");
	if (isset($_POST['Submit'])) {
		$dateTime = array();
		$id = $_GET['id'];
		for ($i = 1; $i <= 6; $i++){
			 $date = $_POST['day'.$i].$_POST['datee'.$i];
			 $dateTime[$i] = date('Y-m-d H:i:s', StrToTime($date));
		}

		$sql = "UPDATE member
		SET day1 = '" .$dateTime['1']. "', day2 = '" .$dateTime['2']. "', day3 = '" .$dateTime['3']. "', day4 = '" .$dateTime['4']. "', day5 = '" .$dateTime['5']. "', day6 = '" .$dateTime['6']. "'
		WHERE memid = $id";
        $result = $conn->query($sql);
		if ($result) {
			echo '<script> alert("แก้ไขสำเร็จ") </script>';
			header('refresh:0; url=../table/full-screen-table showlern.php');
		} else {
			echo '<script> alert("แก้ไขไม่สำเร็จ") </script>';
		}
	}
	$query = "SELECT * FROM member where memid = '".$_GET['id']."' and status = 'm'";
    $result = mysqli_query($conn, $query) or die($mysqli->error);
	?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					นัดวันเรียน
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="" method="POST">
<?php while ($row = mysqli_fetch_array($result)) { ?>
					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกข้อมูล">
					<?php
					if($row["day1"]=='0000-00-00 00:00:00')
					{
					echo "<input class='input100' type='text' name='day1' value='00-00-0000'>";
					}else{echo "<input class='input100' type='text' name='day1' value=".date_format(date_create ($row["day1"]),"d-m-Y").">";}
					?>
						&emsp;&emsp;&emsp;&emsp;<select name="datee1">
					<option value="09:00:00">09:00</option>
					<option value="16:00:00">16:00</option>
					<option value="17:00:00">17:00</option>
					<option value="18:00:00">18:00</option>
					<option value="19:00:00">19:00</option>
					</select>
						<span class="focus-input100" data-placeholder="1"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกข้อมูล">
					<?php
					if($row["day2"]=='0000-00-00 00:00:00')
					{
					echo "<input class='input100' type='text' name='day2' value='00-00-0000'>";
					}else{echo "<input class='input100' type='text' name='day2' value=".date_format(date_create ($row["day2"]),"d-m-Y").">";}
					?>
					&emsp;&emsp;&emsp;&emsp;<select name="datee2">
					<option value="09:00:00">09:00</option>
					<option value="16:00:00">16:00</option>
					<option value="17:00:00">17:00</option>
					<option value="18:00:00">18:00</option>
					<option value="19:00:00">19:00</option>
					</select>
						<span class="focus-input100" data-placeholder="2"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกข้อมูล">
					<?php
					if($row["day3"]=='0000-00-00 00:00:00')
					{
					echo "<input class='input100' type='text' name='day3' value='00-00-0000'>";
					}else{echo "<input class='input100' type='text' name='day3' value=".date_format(date_create ($row["day3"]),"d-m-Y").">";}
					?>
						&emsp;&emsp;&emsp;&emsp;<select name="datee3">
					<option value="09:00:00">09:00</option>
					<option value="16:00:00">16:00</option>
					<option value="17:00:00">17:00</option>
					<option value="18:00:00">18:00</option>
					<option value="19:00:00">19:00</option>
					</select>
						<span class="focus-input100" data-placeholder="3"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกข้อมูล">
					<?php
					if($row["day4"]=='0000-00-00 00:00:00')
					{
					echo "<input class='input100' type='text' name='day4' value='00-00-0000'>";
					}else{echo "<input class='input100' type='text' name='day4' value=".date_format(date_create ($row["day4"]),"d-m-Y").">";}
					?>
						&emsp;&emsp;&emsp;&emsp;<select name="datee4">
					<option value="09:00:00">09:00</option>
					<option value="16:00:00">16:00</option>
					<option value="17:00:00">17:00</option>
					<option value="18:00:00">18:00</option>
					<option value="19:00:00">19:00</option>
					</select>
						<span class="focus-input100" data-placeholder="4"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกข้อมูล" >
					<?php
					if($row["day5"]=='0000-00-00 00:00:00')
					{
					echo "<input class='input100' type='text' name='day5' value='00-00-0000'>";
					}else{echo "<input class='input100' type='text' name='day5' value=".date_format(date_create ($row["day5"]),"d-m-Y").">";}
					?>
						&emsp;&emsp;&emsp;&emsp;<select name="datee5">
					<option value="09:00:00">09:00</option>
					<option value="16:00:00">16:00</option>
					<option value="17:00:00">17:00</option>
					<option value="18:00:00">18:00</option>
					<option value="19:00:00">19:00</option>
					</select>
						<span class="focus-input100" data-placeholder="5"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกข้อมูล" >
					<?php
					if($row["day6"]=='0000-00-00 00:00:00')
					{
					echo "<input class='input100' type='text' name='day6' value='00-00-0000'>";
					}else{echo "<input class='input100' type='text' name='day6' value=".date_format(date_create ($row["day6"]),"d-m-Y").">";}
					?>
						&emsp;&emsp;&emsp;&emsp;<select name="datee6">
					<option value="09:00:00">09:00</option>
					<option value="16:00:00">16:00</option>
					<option value="17:00:00">17:00</option>
					<option value="18:00:00">18:00</option>
					<option value="19:00:00">19:00</option>
					</select>
						<span class="focus-input100" data-placeholder="6"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="Submit" name="Submit" class="login100-form-btn">
							ยืนยัน
						</button>
						<h6>&nbsp;&nbsp;&nbsp;</h6>
						<a href='../table/full-screen-table showlern.php' class='login100-form-btn'> ยกเลิก </a>
					</div>
<?php }?>
				</form>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>