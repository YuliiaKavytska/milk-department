<?php
include $_SERVER['DOCUMENT_ROOT'] . "/configs/db.php";


if(isset($_COOKIE["admin"]) && ($connect->query("DROP DATABASE `milk-department`"))){
	setcookie("admin", "", 0, "/");
	header("Location: /");
}
?>