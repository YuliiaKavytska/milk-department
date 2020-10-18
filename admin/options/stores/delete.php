<?php

	include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";

	if(isset($_GET["id"])){
		$deleteSql = "DELETE FROM shops WHERE shops.id =" . $_GET["id"];
		if(mysqli_query($connect, $deleteSql)){
			include $_SERVER['DOCUMENT_ROOT'] . "/admin/tables/table-stores.php";
		}
	}

?>