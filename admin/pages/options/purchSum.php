<?php
include  $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";
if(isset($_POST["min"]) && isset($_POST["max"])){
	$min = $_POST["min"];
	$max = $_POST["max"];
	include  $_SERVER['DOCUMENT_ROOT'] . "/admin/pages/tables/shop.php";
}

?>