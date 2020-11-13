<?php 

	switch ($_POST['mode']) {
		case 'checkName':
			$data = checkName();
			echo json_encode($data);
			break;
		case 'update':
			$data = update($_POST);
			echo json_encode($data);
			break;
	}

	function checkName() {
		$query = "SELECT * FROM member where status = 'm' order by name DESC";
    	$value = querySet($query);

    	return $value;
	}

	function update($arr) {
		$query = "update member set check".$arr['no']." = '".$arr['status']."' where memid = ".$arr['id'];
    	$value = queryProcess($query);

    	return $value;
	}

	function querySet($query) {
		include('../login_v16/connect.php');
		mysqli_set_charset($conn, "utf8");
		$data = [];
		$result = mysqli_query($conn, $query) or die($mysqli->error);
		while ($row = mysqli_fetch_assoc($result)) {
			$data[] = $row; 
		}
		return $data;
	}

	function queryProcess($query) {
		include('../login_v16/connect.php');
		mysqli_set_charset($conn, "utf8");

		$result = mysqli_query($conn, $query) or die($mysqli->error);
		
		return $result;
	}
?>