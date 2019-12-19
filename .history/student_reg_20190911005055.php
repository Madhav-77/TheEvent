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
	$t_mem=$_POST['member'];


	$duplicate_entry = "SELECT count(s_email) FROM `students_reg` WHERE `s_email`= $email";
	//$result = mysql_result(mysql_query($duplicate_entry),0) ;

   if( $duplicate_entry > 0 ){
		echo json_encode(array("statusCode"=>201));
	}
	else{
		$sql = "INSERT INTO `students_reg`( `s_name`, `s_email`, `s_number`, `college_name`, `uni_name`, `program_name`, `team_name`, `team_size`, `team_members`) 
		VALUES ('$name','$email','$phone','$college', '$uni', '$program', '$t_name', '$t_size', '$t_mem')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo json_encode(array("statusCode"=>201));
		}
		mysqli_close($conn);
	}
?>