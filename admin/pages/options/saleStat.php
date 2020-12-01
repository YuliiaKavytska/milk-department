<?php
include  $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
if(isset($_POST["min"]) && isset($_POST["max"])){
	$productSql = "SELECT * FROM purchase WHERE `date` BETWEEN '". $_POST["min"] . "' AND '". $_POST["max"] . "'";
	$productResult = $connect->query($productSql);

	while($row = mysqli_fetch_assoc($productResult)){
		$arr[] = $row["id"];
	}

	include  $_SERVER['DOCUMENT_ROOT'] . "/admin/pages/tables/sale.php";
}

?>