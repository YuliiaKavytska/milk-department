<?php

	include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";

	if(isset($_GET["id"])){
		$deleteSql = "DELETE FROM employees WHERE employees.id =" . $_GET["id"];
		if(mysqli_query($connect, $deleteSql)){
			include $_SERVER['DOCUMENT_ROOT'] . "/admin/tables/table-user.php";
		}
	}

?>