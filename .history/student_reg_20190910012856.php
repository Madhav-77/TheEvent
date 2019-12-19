<?php
	include 'database.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$college=$_POST['college'];
	$uni=$_POST['uni'];
	$program=$_POST['program'];
	$t_name=$_POST['t_name'];
	$t_size=$_POST['t_size'];
	$sql = "INSERT INTO `crud`( `name`, `email`, `phone`, `college`, `uni`, `program`, `t_name`, `t_size`) 
	VALUES ('$name','$email','$phone','$college', $uni, $program, $t_name, $t_size)";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>