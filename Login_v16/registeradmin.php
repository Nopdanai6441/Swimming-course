<!DOCTYPE html>
<html lang="en">

<head>
	<title>register</title>
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
		date_default_timezone_set("Asia/Bangkok");
		$time = date("Y-m-d H:i:s");
		$checkuser=$_POST['username'];
		$check = "select * from member  where username = '$checkuser' ";
		$result1 = mysqli_query($conn, $check) or die(mysqli_error());
    	$num=mysqli_num_rows($result1);
    	if($num == 0)
    	{
		if (strlen($_POST['phone']) == 10)
		{
		$sql = "INSERT INTO `member` (`username`, `password`, `name`, `lastname`, `status`, `phone`, `time_regis`) 
	 VALUES ('" . $_POST['username'] . "', '" . $_POST['password'] . "', '" . $_POST['name'] . "', '" . $_POST['lastname'] . "', 'a', '" . $_POST['phone'] . "', '$time')";
		
        $result = $conn->query($sql);
		if ($result) {
			echo '<script> alert("สมัครสำเร็จ") </script>';
			header('refresh:0; url=../indexadmin.php');
		} else {
			echo '<script> alert("สมัครไม่สำเร็จ") </script>';
		}
	}else{echo '<script> alert("กรุณากรอกเบอร์โทรศัพท์ให้ครบ 10 ตัว") </script>';}
		}else{echo '<script> alert("Username ซ้ำ")</script>';}
	}


	?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					สมัครสมาชิก
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="" method="POST">

					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกข้อมูล">
						<input class="input100" type="text" name="username" placeholder="รหัสผู้ใช้">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกข้อมูล">
						<input class="input100" type="password" name="password" placeholder="รหัสผ่าน">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกข้อมูล">
						<input class="input100" type="text" name="name" placeholder="ชื่อ">
						<span class="focus-input100" data-placeholder="●"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกข้อมูล">
						<input class="input100" type="text" name="lastname" placeholder="นามสกุล">
						<span class="focus-input100" data-placeholder="●"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกข้อมูล">
						<input class="input100" type="text" name="phone" placeholder="เบอร์โทรศัพท์">
						<span class="focus-input100" data-placeholder="●"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="Submit" name="Submit" class="login100-form-btn">
							สมัครสมาชิก
						</button>
						<h6>&nbsp;&nbsp;&nbsp;</h6>
						<a href='../indexadmin.php' class='login100-form-btn'> ยกเลิก </a>
					</div>

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