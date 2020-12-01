<?php
include  $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
if(isset($_POST["date"])){
	$usersSql = "SELECT * FROM `working` WHERE `date` = '" . $_POST["date"] . "'";
	$userRes = $connect->query($usersSql);
	while($user = mysqli_fetch_assoc($userRes)){
		$arr[] = $user["user_id"];
	}
	include  $_SERVER['DOCUMENT_ROOT'] . "/admin/pages/tables/employee.php";
}


?>