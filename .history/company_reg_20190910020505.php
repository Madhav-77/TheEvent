<?php
	include 'database.php';
	$cname=$_POST['cname'];
	$cdomain=$_POST['cdomain'];
	$c_p_name=$_POST['c_p_name'];
	$c_p_phone=$_POST['c_p_phone'];
	$c_p_email=$_POST['c_p_email'];
	$c_p_pos=$_POST['c_p_pos'];
	$dept=$_POST['dept'];
	$c_size=$_POST['c_size'];
	$sql = "INSERT INTO `students_reg`( `c_name`, `c_domain`, `c_per_name`, `c_per_num`, `c_per_email`, `c_per_pos`, `sel_stud`, `com_team`) 
	VALUES ('$cname','$cdomain','$c_p_name','$c_p_phone', '$c_p_email', '$c_p_pos', '$dept', '$c_size')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>