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
			 $date = $_POST['day3'].$_POST['datee'];
			 $date = date('Y-m-d H:i:s', StrToTime($date));
			 $sql = "UPDATE member
		SET day3 = '" .$date. "', check3 = ''
		WHERE memid = $id";
        $result = $conn->query($sql);
		if ($result) {
			echo '<script> alert("สำเร็จ") </script>';
			$idx=$id;
			header("refresh:0; url=../table/full-screen-table memadmin.php?id=$idx");
		} else {
			echo '<script> alert("ไม่สำเร็จ") </script>';
		}
	}
	$query = "SELECT * FROM member where memid = '".$_GET['id']."' and status = 'm'";
    $result = mysqli_query($conn, $query) or die($mysqli->error);
	?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					ใส่วันที่และเวลาที่ต้องการเรียน<br>ช่วงเวลาในการเรียนมีดังนี้<br>
					ส-อ [9-10 น. 16-17 น. 17-18 น.]<br>จ-ศ [17-18 น. 18-19 น.]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="" method="POST">
<?php while ($row = mysqli_fetch_array($result)) {?>


					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกข้อมูล">
					<?php
					if($row["day3"]=='0000-00-00 00:00:00')
					{
					echo "<input class='input100' type='text' name='day3' value='00-00-0000'>";
					}else{echo "<input class='input100' type='text' name='datee' value=".date_format(new datetime ($row["day3"]),"d-m-Y").">";}
					?>
						<span class="focus-input100" data-placeholder="วันที่"></span>
					</div >

					<div class="wrap-input100 validate-input" >
					&emsp;&emsp;กรุณาเลือกเวลา&emsp;&emsp;<form action="" method="POST">
					<select id="datee" name="datee">
					<option value="09:00:00">09:00</option>
					<option value="16:00:00">16:00</option>
					<option value="17:00:00">17:00</option>
					<option value="18:00:00">18:00</option>
					<option value="19:00:00">19:00</option>
					</select>
					</div >
					
					<div class="container-login100-form-btn m-t-32">
						<button type="Submit" name="Submit" class="login100-form-btn">
							ยืนยัน
						</button>
						<h6>&nbsp;&nbsp;&nbsp;</h6>
						<a href='../table/full-screen-table memadmin.php?id=<?php echo $row['memid'];?>' class='login100-form-btn'> ยกเลิก </a>
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