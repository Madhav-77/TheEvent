<?php
	include 'database.php';
	$cname=$_POST['cname'];
	$cdomain=$_POST['cdomain'];
	$c_p_name=$_POST['cp_name'];
	$c_p_phone=$_POST['cp_phone'];
	$c_p_email=$_POST['cp_email'];
	$c_p_pos=$_POST['cp_pos'];
	$dept=$_POST['dept'];
    $req=$_POST['req'];
    $department = $dept;
	$sql = "INSERT INTO `company_reg`( `c_name`, `c_domain`, `c_per_name`, `c_per_num`, `c_per_email`, `c_per_pos`, `sel_stud`, `lt_req`) 
	VALUES ('$cname','$cdomain','$c_p_name','$c_p_phone', '$c_p_email', '$c_p_pos', '$department', '$req')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>