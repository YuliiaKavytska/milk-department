<?php
$sql = "DROP DATABASE IF EXISTS milk-department";
mysqli_query($sql);

if(isset($_COOKIE["admin"])){
	setcookie("admin", "", 0, "/");
	header("Location: /");
}
?>