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
		$idu = $_GET['id'];
		$idu = $_GET['idu'];
		$idnum = $_GET['nummx'];
			 $date = $_POST['day1'];
			 $date = date('Y-m-d H:i:s', StrToTime($date));
		if($idnum==1){
			$sql = "UPDATE member
		SET day1 = '" .$date. "', check1 = ''
		WHERE memid = $idu";
		}elseif($idnum==2){
			$sql = "UPDATE member
		SET day2 = '" .$date. "', check2 = ''
		WHERE memid = $idu";
		}elseif($idnum==3){
			$sql = "UPDATE member
		SET day3 = '" .$date. "', check3 = ''
		WHERE memid = $idu";
		}elseif($idnum==4){
			$sql = "UPDATE member
		SET day4 = '" .$date. "', check4 = ''
		WHERE memid = $idu";
		}elseif($idnum==5){
			$sql = "UPDATE member
		SET day5 = '" .$date. "', check5 = ''
		WHERE memid = $idu";
		}elseif($idnum==6){
			$sql = "UPDATE member
		SET day6 = '" .$date. "', check6 = ''
		WHERE memid = $idu";
		}
		
        $result = $conn->query($sql);
		if ($result) {
			echo '<script> alert("เลื่อนนัดสำเร็จ") </script>';
			header('refresh:0; url=../table/full-screen-table memnext.php');
		} else {
			echo '<script> alert("เลื่อนนัดไม่สำเร็จ") </script>';
		}
	}
	$namenx = $_GET['namen'];
	$query = "SELECT * FROM memnext where id = '".$_GET['id']."'";
    $result = mysqli_query($conn, $query) or die($mysqli->error);
	?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					เลื่อนวันที่เรียนของ <br><?php echo $namenx; ?>
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="" method="POST">
<?php while ($row = mysqli_fetch_array($result)) { ?>
					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกข้อมูล">
						<input class="input100" type="text" name="day1" value="<?=date_format(new datetime ($row["timenext"]),"d-m-Y H:i")?>">
						<span class="focus-input100" data-placeholder="วันที่"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="Submit" name="Submit" class="login100-form-btn">
							ยืนยัน
						</button>
						<h6>&nbsp;&nbsp;&nbsp;</h6>
						<a href='../table/full-screen-table memnext.php' class='login100-form-btn'> ยกเลิก </a>
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